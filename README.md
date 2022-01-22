1. controllers
2. View
3. models
4. error checking
5. user authentication

===> View witht their controllers

1. Login -> issak
2. Book car -> landing page -> abu -> booking
3. sign up (include all those ds info) -> issak -> signup
4. car owner registration -> fm -> ownerreg
5. payment -> maboyi -> payment
6. Account page(user info) -> zaidi -> userinfo
7. booking history -> abu ->history

===> Table with model

```
Users(custName, matricNo, phoneNumber, address, uploadLicense(bool))
Owners (ownerName, plateNumber, model, carBrand, ownerId)
Booking (plateNumber, model, custName, date, price)
Payment(paymentMethod, custName, date, price)
```
fix payment table
read it out as payment history