# SPORTRADAR CODING SESSION

#### Project is live on my [CodeFactory Webspace](http://siljic.codefactory.live/sportradar/)

	Please find an export of the database with dummy data and the ERD in the db-folder


### The Challenge

#### 1. Coding Exercise

Goal is to implement a calendar for sport events. Events may be added to the calendar and it should be possible to categorize the events based on sports.

Examples:

* Sat., 18.07.2019, 18:30, Football, Salzburg – Sturm
* Sun., 23.10.2019, 09:45, Ice Hockey, KAC - Capitals 


#### 2. Task 1 - Modelling:

Start with identifying the database entities and then create a suitable database diagram (ERD). The ERD should cover all tables and their relations.

Furthermore the database should contain additional information, which may be valuable for Sport Calendar.


#### 3. Task 2 – DB Structure/Data:

Create a database following the structure of your ERD. Add all necessary fields to the tables. Foreign keys should be named with a `_` as prefix _(Example: `_FOREIGNKEY`)_.


#### 4. Task 3 – HTML/PHP:

Create a HTML frontend to display the data in a user friendly way. Navigation should be indicated but no functionality is needed.
Then go on with the PHP part for dynamic display of data – avoid SQL queries within loops! Required parts:

1. Database connection
2. SQL query
3. Data output

Additional filters can be added to the calendar presentation.