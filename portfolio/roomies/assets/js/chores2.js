

    /*1. Post data received from form to PHP file, which then updates the JSON file. 

    Need to create the submit posts for both the 'Add'and 'Edit' forms.

    *** Must change chores.php file to have two distinct forms for both submitting and editing chores.

    */





    /*------ Add/Edit Section--------------


     For Selection of chore as either: Add or Edit:
     Default 'choose' will set both displays of 'add' or 'edit' to 'none'
     
     */



    var add_edit_select = document.querySelector("#add-edit-select");


    var editChoreContainer = document.querySelector(".edit-chore-container");
    var addChoreContainer = document.querySelector(".add-chore-container");

    if (add_edit_select.value == "Choose") {
        editChoreContainer.style.display = "none";
        addChoreContainer.style.display = "none";
    }

    add_edit_select.onchange = function () {
        if (add_edit_select.value == "Choose") {
            editChoreContainer.style.display = "none";
            addChoreContainer.style.display = "none";
        }
        if (add_edit_select.value == "Add") {
            editChoreContainer.style.display = "none";
            addChoreContainer.style.display = "block";
        }
        if (add_edit_select.value == "Edit") {
            editChoreContainer.style.display = "block";
            addChoreContainer.style.display = "none";
        }
    };

    /*

        'Assign to Roomie By' select option:
        
        Set both options to display none.
        
        If 'day of week' selected, set display to block, set others display to none
        If 'frequency' selected, set display to block, set others display to none
     
     */

    var editSelectFreq = document.querySelector(".edit-select-freq");

    var editDayOfWeekContainer = document.querySelector(".edit-day-of-week-container");
    var editFreqContainer = document.querySelector(".edit-freq-container");

    if (editSelectFreq.value == "Select") {
        editDayOfWeekContainer.style.display = "none";
        editFreqContainer.style.display = "none";
    }

    editSelectFreq.onchange = function () {
        if (editSelectFreq.value == "Select") {
            editDayOfWeekContainer.style.display = "none";
            editFreqContainer.style.display = "none";
        }
        if (editSelectFreq.value == "Day of Week") {
            editDayOfWeekContainer.style.display = "block";
            editFreqContainer.style.display = "none";
        }
        if (editSelectFreq.value == "Frequency") {
            editDayOfWeekContainer.style.display = "none";
            editFreqContainer.style.display = "block";
        }
    };

    var addSelectFreq = document.querySelector(".add-select-freq");

    var addDayOfWeekContainer = document.querySelector(".add-day-of-week-container");
    var addFreqContainer = document.querySelector(".add-freq-container");

    if (addSelectFreq.value == "Select") {
        addDayOfWeekContainer.style.display = "none";
        addFreqContainer.style.display = "none";
    }

    addSelectFreq.onchange = function () {
        if (addSelectFreq.value == "Select") {
            addDayOfWeekContainer.style.display = "none";
            addFreqContainer.style.display = "none";
        }
        if (addSelectFreq.value == "Day of Week") {
            addDayOfWeekContainer.style.display = "block";
            addFreqContainer.style.display = "none";
        }
        if (addSelectFreq.value == "Frequency") {
            addDayOfWeekContainer.style.display = "none";
            addFreqContainer.style.display = "block";
        }
    };

    /*--------Reading Chore Users and Dates from JSON----------------
        
        1. Read data from chores.json. Create javascript object from JSON object.
        2. Static Display:
           Write a function that excutes on-load. The function will grab each user's chore date
           and display them in order of most upcoming dates after the startDate on the chores.php page. Each date must be in mm/dd/yyyy format.

     ---------------------------------------------------------------*/

    var users = ['zach', 'adrianna', 'tenzin', 'brian'];

    var currentInfoInner = document.querySelector(".current-info-inner");

    var choreName;
    var startDate;

    var assignedFreq;

    var zachDayofWeek;
    var adriannaDayofWeek;
    var tenzinDayofWeek;
    var brianDayofWeek;



    //$.getJSON('assets/chores.json', function (data) {

    $.ajaxSetup({
        cache: false
    });

    $.ajax({
        url: "assets/chores.json",
        async: false,
        dataType: 'json',
        success: function (data) {


            choreName = data.chore1.choreName;
            startDate = data.chore1.startDate;
            assignedFreq = data.chore1.assignedFreq;

            zachDayofWeek = data.chore1.zach.DayOfWeek;
            adriannaDayofWeek = data.chore1.adrianna.DayOfWeek;
            tenzinDayofWeek = data.chore1.tenzin.DayOfWeek;
            brianDayofWeek = data.chore1.brian.DayOfWeek;
        }

    });

    ////console.log(zachDayofWeek);

    usersDayofWeek = [zachDayofWeek, adriannaDayofWeek, tenzinDayofWeek, brianDayofWeek];

    var days = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

    var months = ["Jan", "Feb", "Mar", "Apr", "May", "June", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];


    /* Convert startDate mm/dd/yyyy format into ISO  */

    //var startDateISO = new Date(startDate).toISOString();
    //    var startDateISO = new Date(startDate).toISOString();
    //    
    ////console.log(new Date(Date.parse(startDateISO)));

    /* Based on the inputted startDate, find the most upcoming days of the week in mm/dd/yyyy for each user. */
    ////console.log(startDate);
    var startDateISO = new Date(startDate);
    ////console.log(startDateISO);

    weekAfterStartDate = [];

    for (var i = 0; i < 7; i++) {
        weekAfterStartDate[i] = new Date(startDateISO.getFullYear(), startDateISO.getMonth(), (startDateISO.getDate() + i));
    }

    ////console.log(weekAfterStartDate);


    for (var i = 0; i < 7; i++) {
        if (days[weekAfterStartDate[i].getDay()] == zachDayofWeek) {
            zachDayofWeek = weekAfterStartDate[i];
        }
    }

    for (var i = 0; i < 7; i++) {
        if (days[weekAfterStartDate[i].getDay()] == adriannaDayofWeek) {
            adriannaDayofWeek = weekAfterStartDate[i];
        }
    }

    for (var i = 0; i < 7; i++) {
        if (days[weekAfterStartDate[i].getDay()] == tenzinDayofWeek) {
            tenzinDayofWeek = weekAfterStartDate[i];
        }
    }

    for (var i = 0; i < 7; i++) {
        if (days[weekAfterStartDate[i].getDay()] == brianDayofWeek) {
            brianDayofWeek = weekAfterStartDate[i];
        }
    }

    usersDayofWeek = [zachDayofWeek, adriannaDayofWeek, tenzinDayofWeek, brianDayofWeek];
    ////console.log(usersDayofWeek);




    /* Zip the users and day of week arrays together so that sorting one array will sort the other respectively */

    zipped = [];

    for (var i = 0; i < usersDayofWeek.length; i++) {
        zipped.push({
            usersDayofWeek: usersDayofWeek[i],
            users: users[i]
        });
    }

    ////console.log(zipped);


    // Sort user day of weeks by day
    zipped.sort(function (a, b) {
        return a.usersDayofWeek - b.usersDayofWeek;
    });

    ////console.log(zipped);

    var z;

    for (var i = 0; i < zipped.length; i++) {
        z = zipped[i];
        usersDayofWeek[i] = z.usersDayofWeek;
        users[i] = z.users;
    }

    ////console.log(usersDayofWeek);
    ////console.log(users);

    /* Create table elements and populate with info on users chores and dates 
     */

    var $choreCard = $("<div>", {
        "class": "chore-card"
    });
    var $table = $("<table>", {
        "class": "table"
    });
    var $tableRow = $("<tr>");
    var $tableHeaderFirst = $("<th>");
    $tableHeaderFirst.html("Roomie");
    var $tableHeaderSecond = $("<th>");
    $tableHeaderSecond.html("Day");

    var $tableBody = $("<tbody>");
    var $tableData = $("<td>");

    $(currentInfoInner).append($choreCard);
    $choreCard.append("<h3>" + choreName + "</h3>");
    $choreCard.append($table);
    $table.append($tableRow);
    $tableRow.append($tableHeaderFirst);
    $tableRow.append($tableHeaderSecond);
    $table.append($tableBody);
    $tableBody.append($tableRow);
    $tableBody.append($tableRow);
    $tableBody.append($tableRow);

    for (var i = 0; i < users.length; i++) {
        $tableBody.append("<tr>");
        $tableBody.append('<td>' + users[i] + '</td>');
        $tableBody.append('<td>' + months[usersDayofWeek[i].getMonth()] + " " + usersDayofWeek[i].getDate() + " " + "(" + days[usersDayofWeek[i].getDay()] + ")" + '</td>');

        $tableBody.append("</tr>");
    }




    /*------------------On page load, the function should check to see if the current date = the startDate. If not: 
       
       1. (if the startDate is ahead of the curent date, the table displays the default one week ahead of the start date
       2. (if the current Date is ahead of thee startDate, the startDate will be updated to the currentDate and all user days will need to be 'pushed to the next week ahead of the new startDate(currentDate)).
       
       --------------------------------------------------------------------------*/



    window.onload = function () {
        currentDate = new Date();
        if (currentDate >= startDateISO) {
            $.ajax({
                url: "assets/chores.json",
                async: false,
                dataType: 'json',
                success: function (data) {
                    ////console.log(data.chore);
                    choreName = data.chore1.choreName;
                    startDate = data.chore1.startDate;
                    assignedFreq = data.chore1.assignedFreq;

                    zachDayofWeek = data.chore1.zach.DayOfWeek;
                    adriannaDayofWeek = data.chore1.adrianna.DayOfWeek;
                    tenzinDayofWeek = data.chore1.tenzin.DayOfWeek;
                    brianDayofWeek = data.chore1.brian.DayOfWeek;
                }
            });

            startDateISO = currentDate;
            //console.log("The current date is ahead of the chosen start date.");

            weekAfterStartDate = [];

            for (var i = 0; i < 7; i++) {
                weekAfterStartDate[i] = new Date(startDateISO.getFullYear(), startDateISO.getMonth(), (startDateISO.getDate() + i));
            }

            for (var i = 0; i < 7; i++) {
                if (days[weekAfterStartDate[i].getDay()] == zachDayofWeek) {
                    zachDayofWeek = weekAfterStartDate[i];
                }
            }

            for (var i = 0; i < 7; i++) {
                if (days[weekAfterStartDate[i].getDay()] == adriannaDayofWeek) {
                    adriannaDayofWeek = weekAfterStartDate[i];
                }
            }

            for (var i = 0; i < 7; i++) {
                if (days[weekAfterStartDate[i].getDay()] == tenzinDayofWeek) {
                    tenzinDayofWeek = weekAfterStartDate[i];
                }
            }

            for (var i = 0; i < 7; i++) {
                if (days[weekAfterStartDate[i].getDay()] == brianDayofWeek) {
                    brianDayofWeek = weekAfterStartDate[i];
                }
            }

            ////console.log(weekAfterStartDate);

            // Remove existing table and update with new dates. 

            $(".chore-card").remove();


            usersDayofWeek = [zachDayofWeek, adriannaDayofWeek, tenzinDayofWeek, brianDayofWeek];

            zipped = [];

            for (var i = 0; i < usersDayofWeek.length; i++) {
                zipped.push({
                    usersDayofWeek: usersDayofWeek[i],
                    users: users[i]
                });
            }

            ////console.log(zipped);


            // Sort user day of weeks by day
            zipped.sort(function (a, b) {
                return a.usersDayofWeek - b.usersDayofWeek;
            });

            ////console.log(zipped);

            var z;

            for (var i = 0; i < zipped.length; i++) {
                z = zipped[i];
                usersDayofWeek[i] = z.usersDayofWeek;
                users[i] = z.users;
            }

            ////console.log(usersDayofWeek);
            ////console.log(users);

            /* Create table elements and populate with info on users chores and dates 
             */

            var $choreCard = $("<div>", {
                "class": "chore-card"
            });
            var $table = $("<table>", {
                "class": "table"
            });
            var $tableRow = $("<tr>");
            var $tableHeaderFirst = $("<th>");
            $tableHeaderFirst.html("Roomie");
            var $tableHeaderSecond = $("<th>");
            $tableHeaderSecond.html("Day");

            var $tableBody = $("<tbody>");
            var $tableData = $("<td>");

            $(currentInfoInner).append($choreCard);
            $choreCard.append("<h3>" + choreName + "</h3>");
            $choreCard.append($table);
            $table.append($tableRow);
            $tableRow.append($tableHeaderFirst);
            $tableRow.append($tableHeaderSecond);
            $table.append($tableBody);
            $tableBody.append($tableRow);
            $tableBody.append($tableRow);
            $tableBody.append($tableRow);

            for (var i = 0; i < users.length; i++) {
                $tableBody.append("<tr>");
                $tableBody.append('<td>' + users[i] + '</td>');
                $tableBody.append('<td>' + months[usersDayofWeek[i].getMonth()] + " " + usersDayofWeek[i].getDate() + " " + "(" + days[usersDayofWeek[i].getDay()] + ")" + '</td>');

                $tableBody.append("</tr>");
            }
        }
    }; 

