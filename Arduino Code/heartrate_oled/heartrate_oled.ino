
#include <SPI.h>
#include <Wire.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>
#include "MAX30105.h"
#include <ESP8266WiFi.h>

#include "heartRate.h"


MAX30105 particleSensor;

const byte RATE_SIZE = 4; //Increase this for more averaging. 4 is good.
byte rates[RATE_SIZE]; //Array of heart rates
byte rateSpot = 0;
long lastBeat = 0; //Time at which the last beat occurred

float beatsPerMinute;
int beatAvg;

const char* ssid     = "DUSITSUK"; //ชื่อ Wifi ที่ต้องการเชื่อมต่อ
const char* password = "0895587098"; // รหัส Wifi

const char* host = "www.heartratedata.lnw.mn";//www.heartratedata.lnw.mn Host

Adafruit_SSD1306 display = Adafruit_SSD1306(128, 32, &Wire);

static const unsigned char PROGMEM logo2_bmp[] =
{ 0x03, 0xC0, 0xF0, 0x06, 0x71, 0x8C, 0x0C, 0x1B, 0x06, 0x18, 0x0E, 0x02, 0x10, 0x0C, 0x03, 0x10,              //Logo2 and Logo3 are two bmp pictures that display on the OLED if called
  0x04, 0x01, 0x10, 0x04, 0x01, 0x10, 0x40, 0x01, 0x10, 0x40, 0x01, 0x10, 0xC0, 0x03, 0x08, 0x88,
  0x02, 0x08, 0xB8, 0x04, 0xFF, 0x37, 0x08, 0x01, 0x30, 0x18, 0x01, 0x90, 0x30, 0x00, 0xC0, 0x60,
  0x00, 0x60, 0xC0, 0x00, 0x31, 0x80, 0x00, 0x1B, 0x00, 0x00, 0x0E, 0x00, 0x00, 0x04, 0x00,
};

static const unsigned char PROGMEM logo3_bmp[] =
{ 0x01, 0xF0, 0x0F, 0x80, 0x06, 0x1C, 0x38, 0x60, 0x18, 0x06, 0x60, 0x18, 0x10, 0x01, 0x80, 0x08,
  0x20, 0x01, 0x80, 0x04, 0x40, 0x00, 0x00, 0x02, 0x40, 0x00, 0x00, 0x02, 0xC0, 0x00, 0x08, 0x03,
  0x80, 0x00, 0x08, 0x01, 0x80, 0x00, 0x18, 0x01, 0x80, 0x00, 0x1C, 0x01, 0x80, 0x00, 0x14, 0x00,
  0x80, 0x00, 0x14, 0x00, 0x80, 0x00, 0x14, 0x00, 0x40, 0x10, 0x12, 0x00, 0x40, 0x10, 0x12, 0x00,
  0x7E, 0x1F, 0x23, 0xFE, 0x03, 0x31, 0xA0, 0x04, 0x01, 0xA0, 0xA0, 0x0C, 0x00, 0xA0, 0xA0, 0x08,
  0x00, 0x60, 0xE0, 0x10, 0x00, 0x20, 0x60, 0x20, 0x06, 0x00, 0x40, 0x60, 0x03, 0x00, 0x40, 0xC0,
  0x01, 0x80, 0x01, 0x80, 0x00, 0xC0, 0x03, 0x00, 0x00, 0x60, 0x06, 0x00, 0x00, 0x30, 0x0C, 0x00,
  0x00, 0x08, 0x10, 0x00, 0x00, 0x06, 0x60, 0x00, 0x00, 0x03, 0xC0, 0x00, 0x00, 0x01, 0x80, 0x00
};

void setup()
{
  display.begin(SSD1306_SWITCHCAPVCC, 0x3C);
  display.display();
  delay(3000);
  Serial.println("Initializing...");

  // Initialize sensor
  particleSensor.begin(Wire, I2C_SPEED_FAST); //Use default I2C port, 400kHz speed
  particleSensor.setup(); //Configure sensor with default settings
  particleSensor.setPulseAmplitudeRed(0x0A); //Turn Red LED to low to indicate sensor is running

  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);

  display.clearDisplay();
  display.setTextSize(1);
  display.setTextColor(SSD1306_WHITE);
  display.setCursor(10, 0);
  display.print("Connecting to ");
  display.setCursor(10, 10);
  display.print(ssid);
  display.display();

  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }


  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());

  display.clearDisplay();
  display.setTextSize(1);
  display.setTextColor(SSD1306_WHITE);
  display.setCursor(10, 0);
  display.print("WiFi connected");
  display.setCursor(10, 10);
  display.print("IP address: ");
  display.setCursor(10, 20);
  display.print(WiFi.localIP());
  display.display();
  delay(1500);
}

int timercount = 0;
int count = 0;
int hrdatacollect[100];


void loop()
{

  long irValue = particleSensor.getIR();
  if (irValue > 70000) {
    display.clearDisplay();                                   //Clear the display
    display.drawBitmap(5, 5, logo2_bmp, 24, 21, WHITE);       //Draw the first bmp picture (little heart)
    display.setTextSize(1);                                   //Near it display the average BPM you can display the BPM if you want
    display.setTextColor(WHITE);
    display.setCursor(60, 10);
    display.println("BPM :");
    display.setCursor(100, 10);
    display.println(beatAvg);
    display.display();

    if (checkForBeat(irValue) == true)
    {
      display.clearDisplay();                                   //Clear the display
      display.drawBitmap(0, 0, logo3_bmp, 32, 32, WHITE);       //Draw the first bmp picture (little heart)
      display.setTextSize(1);                                   //Near it display the average BPM you can display the BPM if you want
      display.setTextColor(WHITE);
      display.setCursor(60, 10);
      display.println("BPM :");
      display.setCursor(100, 10);
      display.println(beatAvg);
      display.display();
      delay(100);

      //We sensed a beat!
      long delta = millis() - lastBeat;
      lastBeat = millis();

      beatsPerMinute = 60 / (delta / 1000.0);

      if (beatsPerMinute < 255 && beatsPerMinute > 20)
      {

        rates[rateSpot++] = (byte)beatsPerMinute; //Store this reading in the array
        rateSpot %= RATE_SIZE; //Wrap variable

        //Take average of readings
        beatAvg = 0;
        for (byte x = 0 ; x < RATE_SIZE ; x++)
          beatAvg += rates[x];
        beatAvg /= RATE_SIZE;

        send_data(beatAvg);
      }
    }
    /*Serial.print("IR=");
      Serial.print(irValue);
      Serial.print(", BPM=");
      Serial.print(beatsPerMinute);
      Serial.print(", Avg BPM=");
      Serial.print(beatAvg);
      Serial.println();*/
  }

  if (irValue < 70000) {
    //Serial.print(" No finger?");
    beatAvg = 0;
    //beatsPerMinute = 0;
    display.clearDisplay();
    display.setTextSize(1);
    display.setTextColor(WHITE);
    display.setCursor(30, 5);
    display.println("Please Place ");
    display.setCursor(30, 15);
    display.println("your finger ");
    display.display();

    //timercount = 0;
    //count = 0;
  }


}

void send_data(int hrdata_re) {
  //delay(1000);
  int sended[60];

  long irValue = particleSensor.getIR();
  WiFiClient client;
  const int httpPort = 80;

  sended[timercount] = hrdata_re;
  Serial.println(sended[timercount]);

  if (!client.connect(host, httpPort)) {
    Serial.println("connection failed");
    display.print("connection failed");
    return;
  }

  if (sended[timercount] >= 55 ) {//|| sended[timercount] >= 55
    for (int i = 0; i < 60; i++) {
      String url = "/data.php?hrdata="; //heartrateData /data.php?hrdata=
      url += sended[i]; // ข้อมูลที่ส่งค่าไปยังระบบฐานข้อมูล
      
      Serial.println(sended[i]);
      Serial.print("Requesting URL: ");
      Serial.println(url);
      client.print(String("GET ") + url + " HTTP/1.1\r\n" +
                   "Host: " + host + "\r\n" +
                   "Connection: close\r\n\r\n");
      unsigned long timeout = millis();
      while (client.available() == 0) {
        if (millis() - timeout > 5000) {
          Serial.println(">>> Client Timeout !");
          client.stop();
          return;
        }
      }
    }
    timercount = 0;
  }
}
