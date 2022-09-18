 Lab2
 EECE 438
 Karima Taha El Baba
 202001602

 I first decided to remove the formInsert.html, and create 1 home page.
 
 I created a new database instead of roscripts, called myDB. 

 I then created using the create.php file, a new table and called it contacts. This table will contain the names, jobs and phone numbers of people. I assigned the phone numbers as a primary key, seeing as it is the only unique thing people own. 
 
 In the home page I created, you are able to access all of the information on this table. 

 I added the table to the home page so that whoever is using the website can take a look at what already exists in the query, and decide accordingly whether they would like to add a new contact, delete an existing contact, or update an existing contact. 
 
 I then thought the update should have its own page where they could view in details everything about the contact they are about to edit.

 The last thing I did was add some design and color to the page.
 
 
 
 
 
 Guide:
 
 Step 1: Once you start the wampserver, you should first open localhost/create.php to create the database locally. 
 Step 2: open localhost/formHomePage.php and there you will find an 'add a new contact' form, and you can see what's already in the database (which in this stage should be empty) and choose whether to update or delete these existing entries.
 Step 3: After having already added some entry/entries, press the 'delete' button to delete an entry and test the delete function. Once you submit this go back to the home page to make sure of the change.
 Step 4: The last step is to choose an entry and press the update button. In this stage you will be taken to the formUpdate.php page where you will see information on the entry you have chosen to update, and enter the new info you wish to add/change. Once you submit this go back to the home page to make sure of the change.
