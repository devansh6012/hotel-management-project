Steps to be followed

Place project folder in htdocs

start XAMPP 
In a Browser go to 
"http://localhost/phpmyadmin/"

Make a database with name "hotelmanage" and import sql from attached database file with name "hotelmanage.sql"

In a Browser go to
"http://localhost/p2/admin/login.php"

Login Page is there
For login one can use the already made account
Username: admin1
Password: admin123
If Already have an account one can directly login otherwise person has to register
(During Registeration no blank values are allowed, Username should be unique and email should be of correct format).

The admin is redirected to "http://localhost/p2/admin/frame.php"
On Menu side there is:
--Dashboard: List of Admins
--Hotels: List of Hotels(with Add, Edit and Delete operations)
--Customers: List of Registered Customers
--Bookings: List Bookings done by Customers

Click on "Hotels" in the menu section.

Now to check the working of these operations one can login as user.
For this open a "new" tab and go to "http://localhost/p2/index.php"

To send mail, user can click on "Contact Us" option in navbar.

For bookings, user should click on "Stay".

User will be redirected to "http://localhost/p2/login.php"
Login Page is there
For login one can use the already made account
Username: xyz
Password: 12345
If Already have an account one can directly login otherwise person has to register.
(During Registeration no blank values are allowed, Username should be unique and email should be of correct format).

Here is the list of hotels.
If user go at bottom of the page user will see hotel with the name "hotel 6".
Now we will go to admin panel which was already opened in previous tab.

We got to "Hotel" section in the sidebar("Already openede because we did this in previous step").
Now for operation:

Add
--Click on add hotel
--lets say
--Hotel Name entered as : abc hotel
--Address entered as : Delhi
--Price entered as : 1200
--Vacant entered as : 20
--Now we choose an image.
--And click on submit 
--A pop up is there saying "Hotel added successfuly".
--click on "OK" 
--Click on "Hotels" in menu side.
--We see that hotel is added in the list
--Now go to user section already opened in another tab which we previously logged in as "xyz" username.
--Reload the page and we see that the hotel with name "abc hotel" is there.
--Here we can see its name, price, address and rating(currently 0).

Edit
--We once again go to admin page which is already opened in another tab.
--Now we click on "Edit" button to edit details of a hotel.
--lets edit hotel with name "abc hotel" which we already added in previous steps.
--After clicking on edit. A form is opened with original details present.
--lets change the "Address" to "UP", "Price" to "2000", "Vacancy" to "15", and choose an image.
--click on "UPDATE". 
--A pop up is there saying "Record Updated".
--click on "OK" 
--Click on "Hotels" in menu side.
--We see that hotel's details are edited in the list
--Now go to user section already opened in another tab which we previously logged in as "xyz" username.
--Reload the page and we see that the hotel with name "abc hotel" has its details updated.
--Here we can see its updated price, image and address.

Delete
--We once again go to admin page which is already opened in another tab.
--lets delete hotel with name "abc hotel" which we already added and edited in previous steps.
--Now we click on "Delete" button to Delete a hotel.
--After clicking on "Delete". A confirmation is there saying "Are you sure you want to Delete this record".
--click on OK to delete.
--Click on "Hotels" in menu side.
--We see that hotel is deleted from the list.
--Now go to user section already opened in another tab which we previously logged in as "xyz" username.
--Reload the page and we see that the hotel with name "abc hotel" is deleted.

Now lets book a hotel.
--From the list of hotel in user panel a user can book hotel.
--We can book any hotel.
--Lets go to the bottom most and we see hotel with name "hotel 6" (Rating might be there(not 0) because we already booked it before for testing).
--Click on "Reserve".
--We see two options for payment("Cash" or "card payment"):

"Pay with Debit Card"
--User must fill card details and number of "Rooms" and "Rating"(1 to 5).
--lets say we selected two rooms with rating 5.
--Click on "Pay with Debit Card". A pop is there saying "Booking successful for rooms".
--Click "OK". 
--There is a navbar. 
--Click on Booked. We see the hotel we just now booked with number of rooms and updated price.
--Click on Home in navbar. If we go to the hotel we reserved i.e, "hotel 6". We see its rating updated(change is seen if rating we choose was significant enough).
 
----OR----

"Pay with Cash"
--Afte clicking on "Pay with Cash". OTP is sent to mail which we entered during registeration. Its a 4 digit random generated otp. 
--Enter the otp sent on your email(if wrong it won't move ahead).
--lets say we selected two rooms with rating 5.
--Click on "Pay with Cash". A pop is there saying "Booking successful for rooms".
--Click "OK". 
--There is a navbar. 
--Click on Booked. We see the hotel we just now booked with number of rooms and updated price.
--Click on Home in navbar. If we go to the hotel we reserved i.e, "hotel 6". We see its rating updated(change is seen if rating we choose was significant enough).

Now we go to Admin Panel already opened in another tab. 
Click on Bookings in menu, there we can see our booking. 

----UPDATES AFTER REVIEW----
->Rating functionality is done
->4 digit generated random otp sent to email(for cash payments) is done
->More methods of payment is done

Above updates were told to be done and they all were successfuly iplemented.
