## Seating

This repo shows the code for the seating in Yakitori Berlin 2024. It is to show all processes are automated, random enough and fair.

### Steps

1. Get Groups: we use [Good-Enough Golfers](https://goodenoughgolfers.com/) to generate random groups for 6 Rounds. This application can make sure(as much as possible) that no one plays with the same person twice. So we got the possible seating plans from version 1 to version 10.

2. Get Winds: This time we wanna make sure, that every player will have at least one of each wind in the first 6 rounds. So in `seating.ipynb` the seating is generated for each seating plan from step 1 and to check if it is possible to let every player have at least one of each wind in the first 6 rounds. The idea here is: for player A,B,C,D we have 24 permutations of the seatings(winds). 
- The permutation will be accepted if each player has not settled with this seat(wind). E.g. A:{E:0,S:1,W:1,N:2}, B:{E:1,S:2,W:0,N:1}, C:{E:1,S:2,W:1,N:0}, D:{E:2,S:0,W:1,N:1} in this situation, the permutation (A,D,B,C) should be accepted. argmin(number of player's seating)
- if the minimum is not available, the second minimum will be accepted. E.g.  A:{E:0,S:1,W:1,N:2}, B:{E:1,S:2,W:0,N:1}, C:{E:1,S:2,W:1,N:0}, D:{E:2,S:1,W:1,N:0} in this situation both C and D wanna sit in North, so the permutation (A,C,B,D) or (A,D,B,C) should be accepted. Which one: The order is the default order of the permutation function in python.
- if the both conditions above is not availiable, a random permutation will be accepted.

* HERE: A better application is to make the permutation order also random but not the default order of the permutation function in python. But I forgot. But it is alreday random and fair enough.


3. Draw Seats: in draw_seats.php can players login and draw their seats. The seats are drawn randomly: using `array_rand` function in php and `current time` as random seed and it also depends on the rest numbers (random). So this draw is reproducible (fair). The drawn number is saved in database.

4. Draw Seats 2: after 19.06. 10 o'clock, the rest of the seats will be drawn by the admin(me). The random seed is `20240619` and using `random.choice(unused_number_copy)` (random), the process is reproducible (fair).


### EMails
email for each player will be send using `email.ipynb`