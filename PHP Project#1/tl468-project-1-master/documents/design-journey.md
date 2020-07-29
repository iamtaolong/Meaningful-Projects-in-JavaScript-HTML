# Project 1: Design Journey

Be clear and concise in your writing. Bullets points are encouraged.

**Everything, including images, must be visible in Markdown Preview.** If it's not visible in Markdown Preview, then we won't grade it. We won't give you partial credit either. This is your warning.

## Existing Design, Planning, & Refined Design (Milestone 1)

### Existing Site: Target Audience I (Milestone 1)
> Who is your _existing_ site's target audience?
The target audience are the college student who want to transfer to another college in the United States in the future.

### Existing Site: Target Audience I Needs (Milestone 1)
> Document your existing site's target audience's needs.
> List each need below. There is no specific number of needs required for this, but you need enough to do the job.

- Need #1: College Information
  - **Need**
    - > What does your existing target audience need?
    They need to see which colleges accept transfer students, the transfer rates, transfer deadlines.
  - **Design Choices**
    - > How does your existing site meet this need? Provide them with a page called "College Database", which contains multiple useful
    links to search for colleges they want to check.
- Need #2: Available Resources
  - **Need**
    - > What does your existing target audience need?
    They need some helpful resources other than the information of colleges, like application platform recommendations, past essays.
   - **Design Choices**
    - > How does your existing site meet this need?
    Provide them with a page called "Available Resources", which contains multiple useful
    links to search for resources they are recommended to use.
- Need #3: Open Workshops
  - **Need**
    - > What does your existing target audience need?
    They sometimes need direct communication with professionals in this field. Having workshop is a good way for them to meet these
    professionals and recieved immeidate answers to their questions.
   - **Design Choices**
    - > How does your existing site meet this need?
    Provide them with a page called "Open Workshops", which contains flyers or workshop information.
- Need #4: Paid Assistance
  - **Need**
    - > What does your existing target audience need?
    They sometimes need professionals' help in their application, like choing colleges, forming ideas for essays, and interview prep.
   - **Design Choices**
    - > How does your existing site meet this need?
    Provide them with a page called "Application Assistance", which contains the access to get professional and paid service.


### Existing Site: Design/Sketches (Milestone 1)
> Sketch your existing site. Include these sketches here.
> DO NOT COPY SKETCHES FROM THE ORIGINAL ASSIGNMENT! Create new sketches here. This is part of the design process to get you thinking about the strengths/weaknesses of the current design.
> Provide a brief explanation _underneath_ each sketch.
![Existing Site: Design/Sketches](https://i.ibb.co/PW8SW2W/1design.jpg)

### Refined Site: Target Audience II (Milestone 1)
> Who is your additional/secondary target audience?
Official colleges. Colleges could use the transferrable to attract students' interest by posting related information and hosting workshops. Also, transferrable could provide the information of the students who are interested in your college.

### Refined Site: Target Audience II Needs (Milestone 1)
> Document target audience II's needs.
> List each need below. There is no specific number of needs required for this, but you need enough to do the job.

- Need #1: Bulletin Board
  - **Need**
    - > What does your target audience II need?
    colleges want to send out notification or promotions to students to attract their attention and ask them to apply. They want
    post deadline information, info session, or annoucements.
  - **Design Ideas and Choices**
    - > How will you refine your site's design to meet this need?
    The Bulletin Board could provide them with an easy platform to contact students.
- Need #2: Interest Palette
  - **Need**
    - > What does your target audience II need?
    In addition to students want to know more about their colleges, colleges want to know what types of students like them. Colleges also want to know the information of these students. Colleges also want the students who are interested in them could join their email-contact list or mailling list.
  - **Design Ideas and Choices**
    - > How will you refine your site's design to meet this need?
    The interest palette could provide with a MATCH system when the student like this school, his profile information will enroll to help college to calculate and analyze their students' data to get better promotion. Also, after student LIKE the colleges, they will be automatically send out an application to this college email contactlist



### Refined Site: Content Organization/Navigation (Milestone 1)
> Identify the content that is necessary for both target audiences.
> List the content here.
> Don't forget to include the form.
- workshop
- Form
- Resources
- Database
- Bulletin Board
- Interest Palette


> Organize the content for the target audience and identify possible pages for the content using card sorting.
> First, organize the content for target audience I. Document your card sorting by taking a photo and including it here.
- index
- workshops
- assistance
- database
- resources
![Existing Site:sort](https://i.ibb.co/xGF25fR/qian.jpg)


> Second, organize the content for target audience II. Document your card sorting by taking a photo and including it here.

- form
- Bulletin Board
- Interest Palette
![Refined Site:sort](https://i.ibb.co/NTZp8tD/hou.jpg)


> Next, organize the content for both target audiences. Document your card sorting by taking a photo and including it here.

- form
- Bulletin Board
- Interest Palette
- workshops
- assistance
- database
- resources
![Final Site:sort](https://i.ibb.co/4sFBRsn/zong.jpg)

> Lastly, list the pages that resulted from your final card sort (i.e. your site's navigation).
- index
- resources (websites & workshops)
- assistance
- database
- bulletin (announcements)
- interest palette (form, maillist)


### Refined Site: Design (Milestone 1)
> Refine the design of your site to meet the needs of _both_ target audiences.
> Include sketches of each page of the refined design.
> Provide a brief explanation _underneath_ each sketch.
> Document your _entire_ design process. **Show your preliminary sketches and your final sketches.**
> Don't forget the form and confirmation page!
![Final Site:Design/Sketches](https://i.ibb.co/ZLXWpGY/2design.jpg)
![Existing Site: Design/Sketches](https://i.ibb.co/PW8SW2W/1design.jpg)


### Partial Plan (Milestone 1)
> Using your refined sketches, plan your site's partials.
> You may describe each partial or sketch it. It's up to you!

I may make the header(introduction of the website), footer(contact info), and navigation bar be the partials.

---

## Sticky Form Planning (Milestone 2)

### Sticky Form (Milestone 2)
> What controls do you need for your form?

The controls I needs for my form is Full name, application term, major, GPA, number of credits that have already taken.

> Plan out your feedback messages for your form. You may sketch (probably the easiest) or write it out.

If all controls are typed in correctly (without having wrong types), will printf "Will send your info to your matching colleges and add to their mailist."
else "wrong input~ Be clear! College application needs patience!"

> How does this form meet the needs of at least one of your target audiences (specify which)?

- Meeting the needs of students, who want to get more info from the colleges they have a better chance to get in by calculating their info like #earned credits, application term, etc.
- Meeting the needs of colleges, which wants the contact info of the students they like and who have a great interest on them.

### Validation Code Plan (Milestone 2)
> Write out your pseudocode plan for handling the validation of the form.

```
input $formcontrol from keyboard
$a = $formcontrol
validate $a
htmlspecialchars $a
if ($a fits the requirments) then ok
else print error message
if (all are typed in and all are correct) then {
  1 print successful message
  2 process a BEST MATCH SCHOOL for him from his profile
  3 then send the student's contact info to that college
  }
else print out alert
```

---

## Complete & Polished Website (Final Submission)

### Target Audiences (Final Submission)
> Tell us how your final site meets the needs of the target audiences. Be specific here. Tell us how you tailored your design, content, etc. to make your website usable by both target audiences.

The final sites changes from a simple static "resources" site for only transfer students -> to a dynamic interaction-based "community: connecting the transfer students group and the colleges that welcome these students.
- For the students, in addition to the resources and assistance provided on the website, they also want to know what colleges is best for them.
- For colleges, they also want to know who are interested in them. Who can join their email interest list and receive information about their application-related and campuslife-related info.

Thus, Thus, Thus!!! From the interestPalette, bulletin, and resources, those colleges could post their infomation to attract students to apply to them. Also, for interestPalette, students could fill up their applicant profile information and sent to the database of the colleges that having a match with him. Then, the college could add him in the database.

### Additional Design Justifications (Final Submission)
> If you feel like you haven’t fully explained your design choices in the final submission, or you want to explain some functions in your site (e.g., if you feel like you make a special design choice which might not meet the final requirement), you can use the additional design justifications to justify your design choices. Remember, this is place for you to justify your design choices which you haven’t covered in the design journey. You don’t need to fill out this section if you think all design choices have been well explained in the design journey.

What the interestPaletteWork

- Step#1: Student's info
- Step#2: System checking and validating typed-in info
- Step#3: Error message & beark ------OR--------- Sucessfully message
- Step#4: Matching with colleges (simple algorithm here, could improve in the future)
- Step#5: Print BEST MATCH college based on the student's info
- Step#6: Send the student's email address to College's maillist Database


### Self-Reflection (Final Submission)
> Reflect on what you learned during this assignment. How have you improved from 1300? What things did you have trouble with?

I think this assignment is pretty interesting. I learnt HTML and CSS by myself so I didn't taken 1300. But during our first class, I was super anxious about whether I could do well in the class since I have little hand-on exercise on HTML. However, since this project requires me to first build a whole static website, which help me review many HTML things.

Maybe the timeline is a little tight. :(
