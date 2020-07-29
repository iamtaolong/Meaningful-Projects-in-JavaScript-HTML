# Project 2, Milestone 2 Feedback

NetID: [tl468]

Milestone 2 is graded for a **completion grade _by section_**. This is a feedback milestone. If you tried to complete it, even though there are some mistakes, you'll get full credit **for that section**. If a section is obviously incomplete, you'll get a 0. **There is no partial credit within a specific section.**

We provide feedback on your milestones to help guide your work for the final submission. Our feedback is designed to help you learn more; our feedback is not a "_pre-grade_". This feedback is designed to catch large problems (which we sometimes miss). **Regardless of the feedback (or lack of feedback) that you get, you are responsible for meeting all of the project's requirements for the final submission.**


## Website Plan
- [x] Planned website is likely sufficient for this assignment.
- [x] Design process is thoroughly documented; a fellow 2300 student would be able to implement this website.
- [x] Demonstrates design evolution and different alternatives considered.
- [x] All design journey content is visible in VS Code's Markdown Preview.

> What did the student do well?
- Detailed design

> What needs improvement?
- More explanation about design choices

**Website Plan:  3 / 3 points** _(no partial credit)_


## Database Schema Plan
- [x] Database schema likely meets the requirements of the assignment and is of reasonable scope (not too complex or too simple)
    - Data is in **one** table.
    - Minimum of 4 fields mentioned (`id` does not count).
    - Only conventional data types included; BLOB is prohibited.
    - includes the web framework convention field, `id`.
- [ ] Database follows standard conventions
    - Table name is lowercase.
    - Fields are lowercase.
    - No spaces in field names; underscores are used instead.
    - Types are appropriate for the data being stored.
    - Appropriate constraints are specified.
- [x] Database schema is appropriate for catalog.

> What did the student do well?
- nice schema plan

> What needs improvement?
- table name and fields should be lowercase

**Database Schema Plan:  3 / 3 points** _(no partial credit)_


## Database Queries Plan

- [x] There are at least 3 database queries (Retrieve all results, search the results, insert a record into
the database).
- [x] The database query plan is sufficient enough so that another INFO 2300 student could code up the plan.
- [x] The planned queries are sensible.

> What did the student do well?
- Clear query plans, good job

> What needs improvement?


**Database Queries Plan:  3 / 3 points** _(no partial credit)_


## Seed Data

**0 points for this section if there is no databases committed and pushed to repo.** Please warn students if .gitignore is preventing submission and instruct them to follow Lab 5, Part 0.

- [x] Database exists under 'secure/catalog.sqlite' and is populated with seed data.
- [x] The seed data is sufficient enough for the project.

> What did the student do well?
- Database is well populated

> What needs improvement?


**Seed Data:  3 / 3 points** _(no partial credit)_


## Draft Website

- [x] There exists a draft website that is mostly done (HTML, CSS, forms, and PHP partials if applicable).
- [x] DB queries are not required for this milestone. If student codes DB queries, all calls use PDO and are properly escaped with parameter markers, etc.
- [ ] All code appears to be their own work. Copy and pasted code from labs/lecture is prohibited.

> What did the student do well?


> What needs improvement?
- Warning, there is some code that is very similar to the labs, copy and pasted code from labs or lectures are not allowed

**Draft Website:  3 / 3 points** _(no partial credit)_


## SQL & PHP Implementation _(Optional)_

**This section is optional. If you worked ahead and made some progress on your SQL query implementation, we'll provide some feedback. This section is worth 0 points.**

- [x] Search only uses 1 SQL query when executed.

    You may have multiple SQL search queries (e.g. conditional statements like Lab 6), but you may only ever use one at a time.

- [x] Search is entirely implemented with SQL. No algorithmic "searching" in PHP.
- [x] There exists at least one way to search across multiple fields.

    You may have implemented some search functionality that does not search across multiple fields. This is fine so long as there is at least one way to search across multiple fields.

- [x] All untrusted data is properly filtered (i.e. fields) or escaped (i.e. values) using parameter markers for all SQL queries.

- [] 2 user-defined functions are implemented.
- [] User defined functions severe a useful purpose; functions improve the readability and maintainability of the code.

> What did the student do well?
- SQL queries and PHP code looks almost complete

> What needs improvement?
- Again, warning about your code being very similar to the labs including some code that does not make sense for your catalog

**SQL & PHP Implementation: 0 / 0 points** _(optional)_

## Total

**Total: 15 / 15 points** (total of sections)
