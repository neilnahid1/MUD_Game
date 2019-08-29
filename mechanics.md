#  Mechanics
## Rooms
**Room Definition** - The rooms is represented as a square with each side(direction) leading to another room.

**Room Navigation** - The player can navigate to different rooms using the commands provided by the game.

**Unlocking rooms** - Some rooms requires a key. Keys may be found in by exploring rooms, Keys can also be obtained by completing a challenge. Challenges comes in a form of defeating a monster, or answering a riddle.

**Exploring rooms** - When a player is in a certain room, the player can have the option to explore the room to find for items. To explore an object, the player will select an appropriate command to explore that object.
Examples:

	1 - scan the drawer
	2 - open the chest

## Character
**Character definition** - Characters are controlled by the player, characters can navigate between different rooms, complete challenges, and use items.

**Character Stats** - Characters have health and damage. Health and damage is used in battle. Health is how much damage the character can absorb. Once health reaches 0 or below, the game is over. 
Damage is the amount of damage the character deals to the enemy's health.

**Character Inventory** - Characters can carry items and is stored in their inventories. Inventories can be accessed through an interface provided by the game.

**Character Abilities(During battle)** - The player have an ability "element swap" that swaps between elements to counter enemy unit's element. 

**Character Classes**
- Elf - High damage but low health
- Human - Normal damage and health
- Dwarf - Low damage but high health
## Items

**Items Definition** - Items are used to aid the player in battle, increase the player's stats, or unlock different rooms.

**Item Acquisition** - Items can be obtained by completing a challenge or exploring parts of the room.

**Items Usage** - Different items have different uses and effects. It can be used during a battle, or it can be used to unlock a door. 

## Challenge
**Challenges Definition** - Challenges needs to be completed in order for player to progress to different rooms.

	**Battle Challenge** - A type of challenge which the player battles a monster

	Battle Interface Commands
	 - Attack - the player attacks the monster
	 - Use Item - the player uses an item from one his inventory and the effect varies from different items.
	 - Swap element - swaps a desired element.
	 - Run - The player runs away from the battle.

	**Riddle Challenge** - A type of challenge of which the player is given a riddle and needs to reply with the correct answer in order to complete the challenge.

## Elemental Effects Mechanic
On top of the base stats which is health and damage, the character also have a property called element. The element affects the damage output on both the player and the enemy. For example, if the player is of water type and the enemy is fire, the player deals more damage to the enemy since water counters fire and the enemy deals less damage to the player because the player wields an element that counters that of an enemy.

**Element Counters**

	Fire counters Earth
	Earth counters Wind
	Wind counters Water
	Water Counters Fire
	
## Progression
The player needs to acquire the 4 elements in order to unlock the final door for the final boss.
The 4 elements can be obtained by defeating the mini-bosses that holds the elements.
The acquired element can be used by the player during the battle by switching between them.

## Mini Bosses
There are 4 mini bosses, each one having an element. After the player defeats a mini boss, it will absorb the element of that boss, and the element can then be used by the player on later battles to switch between them.

## Enemy Units
Enemy units have a race which determines their health and damage. They also have one element type. They can only execute one command which is attack.
## 7. Win Condition
The player needs to defeat the final boss in order to win the game.
