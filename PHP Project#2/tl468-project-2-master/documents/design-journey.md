# Project 2: Design Journey

Be clear and concise in your writing. Bullets points are encouraged.

**Everything, including images, must be visible in VS Code's Markdown Preview.** If it's not visible in Markdown Preview, then we won't grade it.

## Catalog (Milestone 1)

### Describe your Catalog (Milestone 1)
> What will your collection be about? What types of attributes will you keep track of for the *things* in your catalog? 1-2 sentences.

I will do a collection of up-to-date korean pop new release  songs, having things like the name of the song, name of the singer, the type of the singer, current ranking, and release date. In other words, the arrtibutes are the time of release, characteristics of the singer (male solo/female solo/male group/female group/mixed group), name of the song, name of the singerm and the up-to-date ranking provided by MelOn music chart.

### Target Audience(s) (Milestone 1)
> Tell us about your target audience(s).

My target audiences are for wide KPOP fans all over the world who speaks English. (current existing website is all in Korean and its text could not be translated by google translation.)

### Design Patterns (Milestone 1)
> Review some existing catalog that are similar to yours. List the catalog's you reviewed here. Write a small reflection on how you might use the design patterns you identified in your review in your own catalog.

Similar existing catlog:

- 1) https://www.melon.com/index.htm
- 2) https://open.spotify.com/playlist/3nWpOcZuAoeAgkIsOfqXek
- 3) https://www.reddit.com/r/kpop/wiki/upcoming-releases/2020/february

The first catalog might be pretty helpful because its design on the top of the page is just what I would like to do.

![Image of MelOn](https://i.ibb.co/vD5PXKh/melon-reflection.png)


However, I don't know why the images and texts are a little ambigous. I will make a similar page like this. I could have the top navigation bar to change to: "ALL | MALE SOLO | FEMALE SOLO | MALE GROUP | FEMALE GROUP"

Then, under each nav button, I will have these cover photos, the name of the song and the singer, the time they release, and their up-to-date ranking on the chart. All the albums and songs are listed due to the release time: the most up-to-dated one will be on the top. For the name of the singers or songs, I may implement some hyperlink to help users view related information to them.

## Design & Planning (Milestone 2)

## Design Process (Milestone 2)
> Document your design process. Show us the evolution of your design from your first idea (sketch) to design you wish to implement (sketch). Show us the process you used to organize content and plan the navigation, if applicable.
> Label all images. All labels must be visible in VS Code's Markdown Preview.
> Clearly label the final design.

<!-- Source: (original work) Tao Long -->
![Image of Design Journey](https://i.ibb.co/3mq79jB/design-journey.jpg)

## Partials (Milestone 2)
> If you have any partials, plan them here.

I will have the partials of header, footer, and navigation bar which contains "ALL | MALE SOLO | FEMALE SOLO | MALE GROUP | FEMALE GROUP | MIXED".


## Database Schema (Milestone 2)
> Describe the structure of your database. You may use words or a picture. A bulleted list is probably the simplest way to do this. Make sure you include constraints for each field.

My database will be a collection of the songs' information: the song's name, its singer's name, its album's name, current MelOn ranking, and its release date.

Table: Kpop_Comback_Songs_List:
- field 1: id: INTEGER {PK, U, NOT, AI},
- field 2: Song_Name (Song's name): TEXT {NOT},
- field 3: Singer_Name (Singer's name): TEXT {NOT},
- field 4: Singer_Type (Singer(s)' type): TEXT {NOT},
- field 5: Ranking (Current MelOn chart ranking): INTEGER {},
- field 6: Date (Release Date): TEXT {NOT}

PS: Ranking: If the song is not in the top 100, its ranking will be denoted as 101.

PPS:  Date: Since SQLite does not have a storage class set aside for storing dates and/or times. So I will use strings "YYYY-MM-DD" to note

PPPS: Singer_Type: We will denote by letters
* MS for MALE SOLO
* FS for FEMALE SOLO
* MG for MALE GROUP
* FG for FEMALE GROUP
* XX for MIXED
<br><br>


## Database Query Plan (Milestone 2)
> Plan your database queries. You may use natural language, pseudocode, or SQL.]

1. All records

    ```sql
    SELECT * FROM  Kpop_Comback_Songs_List;
    ```

2. Search records

    ```sql
    $sql = "SELECT * FROM Kpop_Comback_Songs_List WHERE $search_field = "the_song_I_want_to_search_for"";
    ```

3. Insert record

    ```sql
    $sql = "INSERT INTO reviews (Song_Name, Singer_Name, Singer_Type, Ranking, Date) VALUES (:Song_Name, :Singer_Name, :Singer_Type, :Ranking, :Date);";
    ```


## Code Planning (Milestone 2)
> Plan any PHP code you'll need here.

```sql
if ($valid_review) {
        $sql = "INSERT INTO reviews (Song_Name, Singer_Name, Singer_Type, Ranking, Date) VALUES (:Song_Name, :Singer_Name, :Singer_Type, :Ranking, :Date);";
        $params = array(
            ': id' => $id,
            ': Song_Name' => $Song_Name,
            ': Singer_Name' => $Singer_Name,
            ': Singer_Type' => $Singer_Type,
            ': Ranking' => $Ranking,
            ': Release_Date' => $Release_Date,
    );
    if (in_array($Song_Name, id(SEARCH_FIELDS))) {
        $search_field = $Song_Name;
    } else {
        array_push($messages, "Invalid category for search.");
        $do_search = false;
}
```


# Reflection (Final Submission)
> Take this time to reflect on what you learned during this assignment. How have you improved since Project 1? What things did you have trouble with?

I learnt how to do work with the database and connect it with the front-end design. I think the collaboration of both the front-end and back-end is quite interesting to me because I see there are much more possibilities and interesting things we could do with back-end programming. I think the problem I met is to build the database in a fancy way haha. I really want to make the chart looks good but it is NOT.
