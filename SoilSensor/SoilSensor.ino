#include <DHT.h>
#include <DHT_U.h>
#include "MQ135.h"

DHT dht(19, DHT11);

#define rainSensorPin 21
#define airSensorPin 35
#define rainPower 2

float airQuality;
int rainStatus, temp, humid, result;


#include <HardwareSerial.h>
#include <Wire.h>
 
#define RE 25
#define DE 33

HardwareSerial SerialPort(2);

const uint32_t TIMEOUT = 500UL;
byte values[21]; // Array to store response bytes
// SoftwareSerial mod(26, 32);

const byte readAllParamsRequest[] = {0x01, 0x03, 0x00, 0x00, 0x00, 0x07, 0x04, 0x08};


// Sever connection
// #include <WiFi.h>
// #include <Wire.h>
// #include <HttpClient.h> 

// const char* ssid = "";
// const char* password = "";

// char server[] = "";

// static unsigned long publishTimestamp = 0;

void AirTempHumid() {
  humid =  dht.readHumidity();;
  temp = dht.readTemperature();
}

void RainSensor() {
  digitalWrite(rainPower, HIGH);    // Turn the sensor ON
  delay(10);                // Allow power to settle
  rainStatus = digitalRead(rainSensorPin);   // Read the sensor output
  digitalWrite(rainPower, LOW);        // Turn the sensor OFF  
}

void AirSensor() {
  airQuality = analogRead(airSensorPin);
}

void setup() {

  // Initialize a serial connection for reporting values to the host
  Serial.begin(4800);

  SerialPort.begin(4800, SERIAL_8N1, 26, 32); 
  pinMode(RE, OUTPUT);
  pinMode(DE, OUTPUT);
  delay(500);

  //Rain Sensor
  pinMode(rainSensorPin, INPUT);
  pinMode(airSensorPin, INPUT);
  pinMode(19, INPUT);

  digitalWrite(rainPower, LOW);
  dht.begin();

//   delay(10);
//   Serial.println();
//   Serial.println();
//   Serial.print("Connecting to ");
//   Serial.println(ssid);
 
//   WiFi.begin(ssid, password);
 
//   while (WiFi.status() != WL_CONNECTED) {
//     delay(500);
//     Serial.print(".");
//   }
//   Serial.println("");
//   Serial.println("WiFi connected");
 
//   // Start the server
// //  server.begin();
//   Serial.println("Server started");
//   Serial.println(WiFi.localIP());
//   delay(1000);
//   Serial.println("connecting...");
}

void loop() {
    // if (client.connect(server, 80)) {
      // Serial.println("connected");
      byte val1, val2, val3, val4, val5, val6, val7;

      // Send a request to read all parameters together
      readModbusValue(readAllParamsRequest, 21);
      AirTempHumid(); 
      RainSensor();
      AirSensor();

      //DHT
        Serial.print("Humidity: ");Serial.print(humid);Serial.println(" %\t");
        Serial.print("Temperature: ");
        Serial.print(temp);Serial.println("*C ");

      //Air
      Serial.print("AirQuality: ");
      Serial.print(airQuality, DEC);               
      Serial.println(" PPM");

      //Rain
      if (rainStatus == HIGH)
        Serial.println("The rain is NOT detected");
      else
        Serial.println("The rain is detected");


      Serial.print("Soil Humidity: ");
      val1 = (values[3] << 8) | values[4];
      Serial.print(val1 / 10.0);
      Serial.println("%");

      Serial.print("Soil Temperature: ");
      val2 = (values[5] << 8) | values[6];
      Serial.print(val2 / 10.0);
      Serial.println(" °C");

      Serial.print("Soil Conductivity: ");
      val3 = (values[7] << 8) | values[8];
      Serial.print(val3);
      Serial.println(" uS/cm");

      Serial.print("Soil PH: ");
      val4 = (values[9] << 8) | values[10];
      Serial.println(val4 / 10.0);

      Serial.print("Soil Nitrogen (N): ");
      val5 = (values[11] << 8) | values[12];
      Serial.print(val5);
      Serial.println(" mg/kg");

      Serial.print("Soil Phosphorus (P): ");
      val6 = (values[13] << 8) | values[14];
      Serial.print(val6);
      Serial.println(" mg/kg");

      Serial.print("Potassium (K): ");
      val7 = (values[15] << 8) | values[16];
      Serial.print(val7);
      Serial.println(" mg/kg");

      Serial.println();
    
    // client.print("GET http://192.168.1.2:3000/api/data?ph=100");


  //   client.print(" ");      //SPACE BEFORE HTTP/1.1
  //   client.print("HTTP/1.1");
  //   client.println();
  //   client.println("Host:");
  //   client.println("Connection: close");
  //   client.println();
  // } else {
  //   // if you didn't get a connection to the server:
  //   Serial.println("connection failed");
  //   delay(2000);
  // }
  delay(5000);
  
  // // Convert the analog reading (which goes from 0 - 1023) to a voltage (0 - 5V):

  // delay(100);
}

void readModbusValue(const byte* request, byte numBytes) {
  uint32_t startTime = 0;
  uint8_t byteCount = 0;

  digitalWrite(DE, HIGH);
  digitalWrite(RE, HIGH);
  delay(10);
  SerialPort.write(request, 8);
  SerialPort.flush();
  digitalWrite(DE, LOW);
  digitalWrite(RE, LOW);

  startTime = millis();
  while (millis() - startTime <= TIMEOUT && byteCount < numBytes) {
    if (SerialPort.available()) {
      values[byteCount++] = SerialPort.read();
    }
  }
}