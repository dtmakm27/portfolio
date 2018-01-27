---
title: "PC Builder"
layout: post
date: 2017-11-10 22:10
tag: PC
image:
headerImage: false
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
<a href="https://github.com/dtmakm27/PC-Builder">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Ei-sc-github.svg/2000px-Ei-sc-github.svg.png" alt="Smiley face" title="PC-Builder GitHub" width="100" height="100" align="right">
</a>
</p>
</body>
</html>

---

# Introduction

the idea of this project is to create a website for algorithmic generation of PC builds, depending on the user's choice of price range and intended use and using some other tags to find out what is best for the user. This project is still under development, for now I have only scraped information about the parts, and create some of the compatibility checkers. I have Also planned out how to create a elo system for the components.

---

## is it Useful?

If created the project will be really useful for casual PC users. They will be able to pick the best computer for the price range and intended use without having to hassle with going through forums, through different sites for the cheapest prices, or worrying about compatibility.

---
## Resources and Gained Knowledge

### What I Learned

to create such a project I had to learn how to web scrape, how to manage data (for the components), learn how to choose computer parts and learn how compatibility in a PC works.

### What I Used

I used java and it's external web scraping library jsoup. I'm also planning on using mySQL to create a database for the parts. To build a framework for the website I'm using Django.

---

# What and How I Did it

### Getting the Data
Firstly I picked the site from which scrape the data from. The site had to include information about components' sizes prices and other specifications. I chose an easy site to scrape, in which most of the data is fully public and not encapsulated in server(ardes.bg) so I could directly scrape the data from the hTML. 

### Sorting it 

Then I had to create an algorithm for getting the PC part data and storing it. Using inheritance I created a different Class for each part. Each containing specific properties about the component and they are all inherit from the same superclass(Component). After that I created an algorithm for scraping the data(using Jsoup) and created lists of different components of the same kind with it.
 After creating the lists I saved them to .ser files so I wouldn't have to run the scraping algorithm each time I had to run other parts of the project.

For further development of this part I will save the data in a MySQL database. 

### Checking Compatibility

After I had the data how to create an algorithm for checking compatibility between parts. For that I am creating an algorithm which creates a Set consisting of one object of each Class.

 
{
Case, CPU, CPUCooler, GPU, MotherBoard, HardDisk, PSU, RAM
}

And after that the compatibility requirements(Listed at the bottom) are presented as a binary relation in the set. Presented as a graph it looks like: 

![Screenshot](https://farm5.staticflickr.com/4759/25985447328_785a06a288.jpg)


Each set of PC parts has to have all the edges to be considered compatible. After finding a compatible set of parts the algorithm saves it to a List object of PC builds.


### Selecting PCs (in development)

After it has the List of compatible parts it uses an algorithm to rate which PC is best for the User's preferences. This part is still in development but it will work with an ELO system based on the User's price range and intended uses.
 
---

## Conclusion

The project is a good base with a great idea that I plan on further developing. I have learned a great deal about programming while doing this project and will even continue to learn more and more. For now I am still developing the website and the algorithm for finding the best computer for the preferences of the user. It has a potential is being developed as a marketable product.



---


# Compatibility Requirements

## CASE

#### CASE-MOTHERBOARD


##### FORM FACTOR on motherboard

motherboard size: mini-ITX, Micro-ATX, ATX, EATX
it's written both on the motherboard (what type it is)and on the case(what type it supports)you should not use a smaller one for efficiency

##### FRONT PANEL headers of PC 

Motherboard should have necessary inputs to support your PC boxes outputs(it should have the headers to connect front panel connectors) (like usb's, jacks etc...)
check case external connectors then check corresponding headers on your motherboard, (a single usb header on the mobo can support up to two usb)


#### CASE-GPU: 

##### PCI SLOTS

check how many PCI slots your video card has then verify your case has the same number of expansion slots (usually they need only two slots and cases have more)

##### LENGTH

GPU length needs to be shorter than case's maximum supported GPU length


#### CASE-CPU COOLER

##### Size

air:
CPU cooler height shorter than case's CPU cooler max height.

liquid: 
Check Radiator size (x-y-z) check if the case supports radiators of that size.

#### CASE-PSU

##### FORM

Power supply form factor should be supported by case.(typical forms (probably)ATX & SFX(smaller toasters))

##### LENGTH AND PLUGS

Need to make sure the length of the unit is supported by the max length of the case (deepness). 
Check for fans or LEDs on case that take from the PSU and make sure it has the right plugs.


#### CASE- STORAGE 

Most Storages are 3.5 or 2.5  make sure case has (drive bay capacity ) drive mounts to accommodate them(most support both).


## MOTHERBOARD:

#### MOTHERBOARD- CPU

##### SOCKET TYPE 

types(LGA 1150,LGA 1151,LGA 1211-v3) THEY SHOULD MATCH EXCATLY! 
BUT 
AMD FM2+ and AMD AM3+ motherboards are backwards compatible with older fm2 and am3 CPU's just not the other way around.
They probably should be of the same socket type.

(check whether they support over clocking as well)

#### MOTHERBOARD-RAM

##### TYPE 

Stick type should be the same as motherboard's socket (DDR3 or DDR4 ). 

If you have more than two dims, make sure motherboard has at least that many slots.
 Motherboards have a ram capacity they can support (MAXIMUM MEMORY SUPPORTED) so do not go higher on that.
 Motherboards should support rated speed of the ram in megahertz.

#### MOTHERBOARD-GPU

##### PCI SUPPORT

Both should support same PCIe generation (PCIe Gen 3 it's now). 
Multiple GPU's should support the same number of cards (SLI for Nvidia and CrossFire for AMD).

#### MOTHERBOARD-CPU COOLER

##### SOCKET

Cooler should support the same socket. (most support all)
 
#### MOTHERBOARD-PSU

##### CONNECTORS

EPS CPU connector 8pins(or 4) on motherboard (connector should be the same as socket).

ATX MOTHERBOARD connector 20pins(or 24) (should have a 20+4 COnnector).

#### MOTHERBOARD-STORAGE

(most connect through a SATA data cable to send the data)

##### PORTS

Most Motherboards have a number of those ports. there are sata2 and sata3, you should plug the sata3 in to the newer port whenever possible.

##### SLOTS

Motherboard should have the same number of slots as SD or HARD drive.

##### TYPES 

m2drives:(newer ones) have a separate slot that's build directly in the motherboard(m.2 slot) check to see which are supported(lengths and such). Otherwise they can be SATA or NVme PCIe some support each, some support one, and some support both.

## CPU

#### CPU-CPU COOLER

##### THERMAL DESIGN POWER

thermal design power should be less than cooler capacity. if you want to over-clock it, it should exceed the TDP.

#### CPU-PSU

##### POWER 

the TDP gives you generally how much power it will draw. (Make sure power consumption as a whole is less than PSU power)

## RAM

#### RAM-CPU COOLER

##### PHYSICAL COMPATABILITY

CPUCooler could block dim slots. you can find CPU cooler with a high or low profile ram kit.

## GPU

#### GPU-PSU

##### POWER 

GPU lists the min power supply to drive the system, you should get it at least 100w bigger or 150 if you want to over clock it.

##### CONNECTORS

Your power supply should have the needed PCI express connectors to power. PSU should have correctly sized plugs and size and connectors. Many power supplies feature 6+2 PCIe connectors which can be used on 6pin and 8pin!

## CPUCooler

#### CPU COOLER-PSU

Cooler should be shorter than your max CPU height limit.

## PSU

#### PSU-STORAGE

##### PORTS

PSU needs to have a SATA plug for each HardDisk and pins should be the same number.
 
---













---
