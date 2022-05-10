_ **Test Plan** _

**TABLE OF CONTENTS**

1. Introduction
2. Test Items
3. Features to be Tested
4. Approach
5. Pass/Fail Criteria
6. Testing Tasks
7. Responsibilities
8. Schedule

**1.0 Introduction**

Created a news app which obtains new headlines from [**https://newsapi.org/**](https://newsapi.org/) **.** The app will display articles from the &quot;General&quot; category when no one is signed into the app. There is a page to sign up, sign in and sign out. There is also a settings page for choosing new categories.

**2.0 Test Items**

- Sign-in page Requirement
- Landing Page
- Sign-up page Requirement
- Database Requirement
- Dashboard Page Requirement
- Welcome Page Requirement
- Settings Page Requirement
- Logout Page
- Sign-In API
- Sign-Out API
- News API

**3.0 Features to be Tested**

Various features need to be tested for this sprint. Starting with we&#39;ll check if our news app is successfully obtaining recent new headlines from [**https://newsapi.org/**](https://newsapi.org/) **.** After that we&#39;ll check that when the user is not signed in, he/she should be able to view news from the &quot;General&quot; category. When the user is signed in, the articles will be displayed from categories chosen in the user&#39;s settings.

We&#39;ll also check if there is a signup, sign-in, settings, logout page and a search bar for the users to search for specific topics.

**4.0 Approach**

The approach to test the features would be by using integration testing and document the test cases with the obtained test results. PHP, HTML and Java Script will be used for unit testing including the test-driven development test cases.

**5.0 Pass/Fail Criteria**

To check the pass/fail criteria, all the required features will be tested. If any feature or requirement is not meeting the criteria, then the test case will show as a fail otherwise it would be a pass. The pass/fail criteria will be determined once the unit testing has been performed.

**6.0 Intergration Testing Tasks**

Integration Test Cases differ from other test cases in that they concentrate on the interfaces and data/information flow across components. Priority should be given to integrating links over unit functions that have already been tested. Integration Test Cases Examples for the following scenario: The application comprises three modules: 'Login Page,' 'Landing Page,' and 'Pagination,' each of which is logically integrated.

ITest Cases for Registration Page -Username and password are mandatory fields -Required and optional fields of the form -Radio buttons and checkboxes are placed correctly -The limit of the Password should be alphanumeric, along with special characters -Username and password Validation -User Interface should be perfect and user friendly

ITest Cases for Login Page -User Interface, to check all the text boxes and buttons -Required Fields where it can be verified by not filling any data -User Login, when passing a correct username and invalid password -User Login to check if the password is entered in encrypted

ITest Cases for Dashboard Page -Able to view the users name on the dashboard -Able to see and exit or logout of the dashboard -A message saying successfully logged in

ITest Cases for Settings Page – User should be able to select the news categories which he/she wants to view and those settings should be saved successfully so that even when the user logs out and signs back in, the settings are still intact.

ITest Cases for Landing page – User should be able to view news from the &quot;General&quot; category.

ITest Cases to check if the user id able to refresh the list of articles.

**7.0 Responsibilities**

Harshith Emani

- Backend Developer
- Completed 8 Test cases
- Worked with XAMPP and APACHE server

Tanish Bugnait

- Software Tester
- Worked with multiple test cases and test plans
- Viewed trial and error methods with php files

Antonita Racheal

- Frontend Developer
- Worked with HTML, CSS and PHP files
- Ran the test cases and displayed test results

**8.0 Schedule**

Each testing assignment and test milestone has a specific timetable. We&#39;ve listed the timeframes for each testing resource as well as the tools needed to execute them, such as the XAMPP server, MySQL, Apache, PHP files, and so on.

In our test plan and test results, we&#39;ve included all test milestones from the sprint 3 plan, as well as all item transmittal events. We spent over 20 days getting the Entry system up and its operations.
