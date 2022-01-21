<?php include("header.html"); ?>

        <h1 class="projectHeader">Inheritance Program: BunGeney</h1>
        <img id="bunIMG" src="images/BunGeney.png" alt="Picture of UML Diagram Software" />
        <section class="projectText">
            <p>BunGeney is a Python program that simulates genetic inheritance in rabbits. This program was a collaboration between myself and a student in Millersville's biology department. It was created to be used in high school and college-level biology classrooms.</p>
            <h2>How to use:</h2>
            <p>The "New Litter" button at the top of the window is used to generate litters of rabbits. The mother and father are determined by user input, which is retrieved using a custom popup window.  
                Once a litter has been generated using genetic inheritance statistics for rabbits, the results are shown through the tables at the top of the window, the bottom of the window, and the individual rabbit section on the right. 
                The table at the top of the window consists of rows of buttons that show additional data when clicked. When a rabbit's button is clicked, that rabbit's information and picture are shown on the right side of the window. 
                A litter's statistics are shown in the bottom table when that litter's "Offspring of ..." button is clicked.</p>
            <p>A more thorough description of how to use the software can be found in README.md on the project's GitHub.</p>
            <h2>My contributions:</h2>
            <p>I created the GUI for BunGeney. This includes the following files: BunGeney.py, BunnyInfo.py, BunnyTable.py, Controller.py, MainWindow.py, Menus.py, and TotalsTable.py.</p>
            <p>An explanation for downloading and using the program can be found on the project's GitHub page in README.md.</p>
            <p>The full project can be found on GitHub here:</p>
            <button id="bunBTN" type="button" onclick="window.location.href='https://github.com/Jen04/BunGeney';">Github Repository</button>
        </section>
    </body>
</html>
