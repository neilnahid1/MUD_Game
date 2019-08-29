#  Mechanics
## 1. Rooms
1.1 Room Definition - The rooms is represented as a square with each side leading to another room.


1.2 Room Navigation - The player can navigate to different rooms using the commands provided by the game.


1.3 Unlocking rooms - Some rooms requires a key. Keys may be found in another rooms, Keys can also be obtained by completing a challenge. Challenges comes in a form of defeating a monster, or answering a riddle.


## 2. Character
2.1 Character definition - Characters are controlled by the player, characters can navigate between different rooms, complete challenges, and use items.


2.2 Character Stats - Characters have health and damage. Health and damage is used in battle. Health is how much damage the character can absorb. Once health reaches 0 or below, the game is over. 
Damage is the amount the character deals to the enemy's health.

2.3 Character Inventory - Characters can carry items and is stored in their inventories. Inventories can be accessed through an interface provided by the game.


2.4 Character Classes

	2.4.1 Elf - High damage but low health
	2.4.2 Human - Normal damage and health
	2.4.3 Dwarf - Low damage but high health
## 3. Items

3.1 Items Definition - Items are used to aid the player in battle, increase the player's stats, or unlock different rooms.


3.2 Items by completing a challenge or exploring parts of the room.


3.3 Items Usage - Different items have different uses and effects. It can be used during a battle, or it can be used to unlock a door. 

## 4. Challenge
4.1 Challenges Definition - Challenges needs to be completed in order for player to progress to different rooms.


4.2 Battle Challenge - A type of challenge which the player battles a monster

 	4.2.1 Battle Interface Commands
	 	- Attack - the player attacks the monster
	 	- Use Item - the player uses an item from one his inventory and the effect varies from different items.
		- Run - The player runs away from the battle.


4.3 Riddle Challenge - A type of challenge of which the player is given a riddle and needs to reply with the correct answer in order to complete the challenge.

## 5. Elemental Effects Mechanic
5.1 On top of the base stats which is health and damage, the character also have a property called element. The element affects the damage output on both the player and the enemy. For example, if the player is of water type and the enemy is fire, the player deals more damage to the enemy since water counters fire and the enemy deals less damage to the player because the player wields an element that counters of that enemy.

5.2 Element Counters

	Fire counters Earth
	Earth counters Wind
	Wind counters Water
	Water Counters Fire
## 6. Win Condition 
The player needs to find the exit door in order to win the game.
