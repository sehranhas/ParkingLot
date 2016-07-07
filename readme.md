# Parking Lot Software

The home page is at http://localhost:8000/. Here the user will have two options to choose. The user can either park the car with the given license plate and car size or pick up a car with a given license plate.

## Database Information

I used MySQL for the database.

For my database structure I'm using three tables. 

The ParkingSpot table contains the total number of parking spots (for this exercise I set the total number to be 20). In this case there are:

Small: 2 spots (10%)

Medium: 9 spots (45%)

Large: 7 spots (35%)

Super-Sized: 2 spots (10%)

The ParkingSize table is a reference for the integers in the size column of the ParkingSpot table. For example, 0 indicates that the spot is small, and 3 indicates that the spot is super-sized.

When a user parks a car he/she enters a license plate number and car size where the project will update the ParkingSpot table if a row with a null licensePlate and matching size is found. If not the project will notify the user that there are no available spots.

When the user removes a car the project will first calculate the total amount to be paid and then update the row where the matching license plate number is found and set the licensePlate column and startTime to null. If the user enters a non-parked license plate number the project will notify the user that no such car is parked at the parking lot.

The Statistics table will be used for analyzing the data for the Parking Lot by entering an attribute (e.g average duration) and signing a value to it.

For additional information on the database please check the ParkingSpots.sql file located at sehranhas/ParkingLot.

## Laravel Project Information

For this exercise I decided to use Laravel (this is my first time using it). 

The views of the project are located at resources/views/pages. 

The controller for the project is ParkingSpotController.
