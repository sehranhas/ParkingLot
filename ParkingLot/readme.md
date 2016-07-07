# Parking Lot Software

The home page is at http://localhost:8000/. Here the user will have two options to choose. The user can either park the car with the given license plate and car size or pick up a car with a given license plate.

## Database Information

For my database structure I'm using three tables. 

The ParkingSpot table contains the total number of parking spots (for this exercise I set the total number to be 20). In this case there are:

Small: 2 spots (10%)

Medium: 9 spots (45%)

Large: 7 spots (35%)

Super-Sized: 2 spots (10%)

The ParkingSize table is a reference for the integers in the size column of the ParkingSpot table. For example, 0 indicates that the spot is small, and 3 indicates that the spot is super-sized.

The Statistics table will be used for analyzing the data for the Parking Lot by entering an attribute (e.g average duration) and signing a value to it.