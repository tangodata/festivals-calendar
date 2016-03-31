# Tangodata List of Upcoming Festivals/Marathons


## Existing Tango Festival Portals

In my opinion the attempts to create silos of events database is a 
wasted opportunity -- organisers cannot keep up with all the ways
they can get their announcement out, and the database silos are 
obsolete within a few months.

### Tango only

- http://tango.info/festivals
- http://www.tangofestivals.net/
- http://www.tangomarathons.com/
- http://www.festivalsero.com/style/argentine_tango-11
- http://www.tangopolix.com
- http://tangotoday.org/
- http://www.tangoindex.com/
- http://www.tango-international.org/index_eng.php
- http://www.tangodanza.de/festivals.php


### All types of Festivals

- https://calendar.google.com/calendar/embed?src=0b1nhmt9guusf8mpg8gke3l6sg%40group.calendar.google.com&ctz=Asia/Singapore
- https://www.fest300.com/festivals/tango-buenos-aires-festival
- http://www.worldfestivaldirectory.com/
- http://heyevent.com/search?q=tango

### Milongas and local events

- http://milongas-in.com
- http://www.milmilongas.com
- http://www.hoy-milonga.com
- http://www.milonga.com/
- http://www.tangomango.org
- https://www.tangotimetable.com/
- http://www.tangointown.com/


### Tango in ship, retreats, camps

- http://www.tangoatsea.com/index.php/
- http://www.dancingatsea.com/
- http://www.thetangocruise.com/
- http://www.tango-cruise.com
- http://www.clubdanceholidays.com/ActivityHolidays.aspx?ActivitySubTypeId=11
- https://www.golearnto.com/search.aspx?ctry=&activetype=4&activesubtype=18&active=224&datefrom=&dateto=
- http://www.tangoholidays.eu/
- http://tangofolly.com/tango-holidays/
- http://www.tangopartner.org/



## The Project (under development)

The idea is to pool the event organiser's information in the fewest
canonical forms, and use that to populate the various calendars and
events portals.  Whether it will work depends on the organisers'
support.

### Specification

Crowdsourced information list from user-submissions and public announcements.
It is expected the data is rebuilt once a month, and contains valid information
for the next 12 months on rolling basis.

The structure of the projects:

### inputs

- input data is stored in YML format
- one file per region/country/city (depending on volume)
- core information in English

### processors

- build stage combines all the raw YML files
- old/expired entries go to Archive, new/future entries go to Current

### outputs

- basic files are Current and Archive in YML
- equivalent files in JSON, Comma-delimited text
