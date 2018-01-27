---
title: "Loony's Quest"
layout: post
date: 2018-01-10 22:10
tag: games
image: https://farm5.staticflickr.com/4745/25906810628_a15cb239f1.jpg
headerImage: true
projects: true
hidden: true # don't count this post in blog pagination
description: "Programming game educational project"
category: project
author: dean
externalLink: false
---

<html>
<body>
<p>
<a href="https://github.com/dtmakm27/Loony-s-Quest">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Ei-sc-github.svg/2000px-Ei-sc-github.svg.png" alt="Smiley face" title="Loony's Quest GitHub" width="100" height="100" align="right">
</a>
</p>
</body>
</html>

---

# Summary

The main goal is to create a fun way of improving IT education. It includes coding in-game with error checks and compilation(check out in-game programming challenges), learning programming material, answering programming questions, and playing a fun and entertaining game!

The target audience is children from the 4th to 6th grade. I chose an elephant to represent our main character because many of the Bulgarian IT competitions tasks include this fictional character Loony. The aim of the game is to make the process of education in the IT sphere fun.

The game was given to my school where it is being further developed by other students and students played it in programming classes.

---

## Introduction

In the 21st century, electronic games, computers and the Internet are a great influence in children's lives. Educational computer games occupy an increasing part of the educational process. With their help, children easily comprehend the material and put themselves in an active and creative environment.

Educational computer games contribute to: developing thinking, forming skills, developing memory and attention, developing coordination, and - the motivation of more cognitive activity in the child.

An important element in the design and development of educational computer games is provision of high quality interface and interaction between children and computer. Taking into consideration the psychological-pedagogical characteristics of children in 1-4 grade also determines the choice of design, navigation, providing sound elements. This software is developed in the form of a computer game and is made to provoke the interest of children.

---

## Exposition

In primary school, the educational process is combined with games. A big variety of games have been developed to allow for in-game education. Children get used to such an approach, and when they continue their education, they miss it. The aim of the game is to provide an interactive approach to learning new knowledge and strengthening old one in a fun way for the students.

---

# Plot

The main character in the game is Loony the Elephant. We have chosen this protagonist because he is familiar to children because of the use of his image in a number of programming tasks for children in Bulgaria. His mission is to become first in an international computer science competition to which he was invited by accident, but Loony has no idea how to code. On his way there, he goes through various adventures and becomes a skillful programmer little by little.

---

# Level of complexity of the project

Creating a product to meet such great demands is a challenge that only motivates me to work more. The main difficulties were related to the need to constantly learn new technologies and programming languages.The most appropriate one was chosen to support different operating systems and hardware platforms plus the ability to easily update. Unity allows the game to be played online as well as all support for Mac OS, Windows, Linux and more. Blender is a free product that is constantly being developed and has functionality and compatibility with Unity. 
I had a major difficulty with creating the Task Solution module, where PowerShell, MinGW and VBScript had to be studied.

---

## Logical and functional description of the solution

Gaming challenges

The game consists of the following parts:
- Graphical (Blender) - This section includes 3D and 2D patterns, textures and backgrounds.
- Programming - This includes JavaScript, Visual C #, VBScript, and PowerShell.
- Placing and Plotting in the game engine(Unity) - in this part, objects are edited and their positioning in the game and their textures and code is added.

Educational material challenges

The educational material is divided into different as in the book "Getting Started in C ++ Programming" (Telerik's guide to programming used for children).

In-game programming challenges

For each programming task we have a folder with the name of the task.
Example ATM Task:
- atm.cpp - this file records the player's written code for the task.
- atm.in - The number of these .in files depends on the number of input data we want to test the program with. These files contain the input data to test the program with;
- atm.sol - these files are were the expected outputs are recorded;
- atm.txt - this is the user's output after compilation of the program;
- one.bat - with this file the user's program is run with inputs from the .in files;
- all.bat - g++.exe(part of MinGW) is started from this .bat file- compiles a cpp file into an .exe file. We also run the one.bat file from here as many times as .in files we have, and then save the output data from those in atm.txt files;
- hidecmd.vbs - we use this file to execute processes in the console and render them invisible. We also have a code that determines for how long all.bat and one.bat processes are run. The time is determined by the time required to complete the task. If the task does not complete its execution at that time, the processes are stopped.
- CPP CHECK - Along with this, the code that the player writes will be checked for Runtime or compiler errors. For this I have used Cppcheck. Cppcheck is a static C / C ++ code analysis tool. The code is sent to cppchek and from there a bug report is saved in a txt file. The text of the file is displayed in the game err log in-game;

There is a text window in the game interface where the player's code is placed. When you click the "Запис"(run) button, the code is saved in the corresponding cpp file and hidecmd.vbs is started. After that the user has to click the "Сравни"(compare) button to compare the user's output with the expected true output

---
 
# Realization

For the creation of this project I have used: 
- Unity (C# and JavaScript)
- Blender
- Adobe Photoshop
- MinGW
- VBScript, PowerShell

---

# Application description:

System Requirements:

- OS - Windows (XP / Vista / 7)
- Screen with resolution greater than 1024 x 768 pixels.
- Video card: DX9 (shader model 2.0).
- 2g of free hard disk space.
- Internet connection
- CPU support capability: SSE2;
- MinGW and installed g ++. Add a path to Environment Variables - C: \ MinGW \ bin.

---

# Installation notes:

- run the Installer

- MinGW install window will open at the end. 
When the following menu appears, right-click on the squares and click mark for installation, then go to the installation in the upper right corner, left click it, and click on Apply Changes, then press Apply, wait until it's finished the process and then close the installer.
As shown in the photos

![Screenshot](https://farm5.staticflickr.com/4705/39778478371_008eeb2146_b.jpg)

![Screenshot](https://farm5.staticflickr.com/4613/24908408997_58c2081551_b.jpg)

![Screenshot](https://farm5.staticflickr.com/4711/24908409127_ab463c63aa_b.jpg)

---

## Demo In-game Pics:





going through different levels
![Screenshot](https://farm5.staticflickr.com/4662/39224468504_a461bc64c5.jpg)



the Room of Code
![Screenshot](https://farm5.staticflickr.com/4705/39224468424_64c2b5f778.jpg)





example level
![Screenshot](https://farm5.staticflickr.com/4699/38879496015_04b1d31e2c_b.jpg)





in-game programming
![Screenshot](https://farm5.staticflickr.com/4699/38900054135_2a3ddd2e8e.jpg)


---

## Conclusion


The main goal of the project is teaching children informatics and information technology in the age group 4-6 in an easier, interesting and fun way. The game was used in computer science class at my school. The project can be developed by adding additional levels of different types, adding new models, animations and questions.

---

# References


1.	[Unity](http://unity3d.com/)

2.	[Blender](http://www.blender.org/)

3.	“Въведение в програмирането с C#” – Svetlin Nakov  programming books

4.	[VBScript](http://msdn.microsoft.com/en-us/library/t0aew7h6%28v=vs.84%29.aspx)

5.	„Първи стъпки в програмирането на C++“ – Biserka Yovcheva   programming books

6.	„Алгоритми, програми и задачи“ – Emil Keledzhiev, Zornica Denkova   programming books

7.	[Cppcheck](http://cppcheck.sourceforge.net/)

