# 🌦️ IoT Weather Monitoring System

A Raspberry Pi–powered weather station that collects temperature and humidity data using DS18B20 and DHT22 sensors, sends it to an AWS EC2 instance, and stores it in a MySQL database. Built as a final project for ASU IFT460.

## 📦 Project Overview

This system monitors environmental conditions and displays them via a web interface hosted on AWS. It’s designed to be modular, secure, and scalable—ideal for home automation, remote monitoring, or educational use.

## 🧱 Architecture

- **Sensors**: DS18B20 (temperature), DHT22 (temperature + humidity)  
- **Edge Device**: Raspberry Pi  
- **Backend**: Laravel (PHP) running on AWS EC2  
- **Database**: MySQL  
- **Frontend**: Bootstrap-based HTML tables

## 🚀 Features

- Real-time sensor data collection  
- Secure POST requests with token validation  
- Responsive web interface for viewing data  
- Modular codebase for easy expansion

## 🛠️ Setup Instructions

### Raspberry Pi
1. Connect DS18B20 and DHT22 sensors via GPIO  
2. Enable 1-Wire interface  
3. Run Python script to collect and POST data

### AWS EC2
1. Launch Ubuntu instance  
2. Install LAMP stack + Laravel  
3. Configure MySQL and create `weather_data` table  
4. Deploy Laravel app and set up cron job (optional)

### MySQL Schema
```sql
CREATE TABLE weather_data (
  id INT AUTO_INCREMENT PRIMARY KEY,
  temperature FLOAT,
  humidity FLOAT,
  timestamp DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

## 📸 Screenshots  
*(Add screenshots of the web interface, sensor setup, or flowchart here)*

## 🧪 Troubleshooting  
- DS18B20 sensor may require breakout board for stable readings  
- Ensure proper permissions for GPIO access  
- Check EC2 security groups for open HTTP/HTTPS ports  

## 📚 Documentation  
- Final Report (IFT460)  
- Presentation Slides  
- Flowchart Diagram  

## 🧠 Author  
**Michael J. Brown**  
IFT460 Final Project @ Arizona State University  
Focused on building resilient, scalable systems with clear documentation and modular design.
