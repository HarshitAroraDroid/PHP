import random

def cow_and_bull_game(length,guess):
    """
        Create a program that will play the “cows and bulls” game with the user. The game works like this:

        Randomly generate a 4-digit number. Ask the user to guess a 4-digit number. For every digit that the user guessed correctly in the correct place, they have a “cow”. For every digit the user guessed correctly in the wrong place is a “bull.” Every time the user makes a guess, tell them how many “cows” and “bulls” they have. Once the user guesses the correct number, the game is over. Keep track of the number of guesses the user makes throughout teh game and tell the user at the end.

        Say the number generated by the computer is 1038. An example interaction could look like this:

        Welcome to the Cows and Bulls Game! 
        Enter a number: 
        >>> 1234
        2 cows, 0 bulls
        >>> 1253
        1 cow, 1 bull
    """
    print(length,guess)
    count, cows, bulls = 0, 0, 0
    s = "0123456789"
    guess = ""
    num=[]
    num = random.sample(s,length)
    # print(num)
    print("Info: All Digits in the number must be different.")
    while count < guesses:
        print("Guess "+ str(count+1)+ " out of " + str(guesses))
        guess = list(input("Enter any "+str(length)+" digit number: "))
        # print(guess)
        if num == guess:
            cows = len(num)
            bulls = 0
            count = guesses
        else:
            for i in range(0,length):
                for j in range(0,length):
                    if num[i] == guess[j]:
                        # print("IF num: " + num[i] + " guess: " +guess[j])
                        if i == j:
                            cows += 1
                        else:
                            bulls += 1
                        break
                    j += 1
                i += 1
        if cows == length:
            print("You Guessed Right")
        else:
            if count == guesses-1:
                print("OOPS You Lost!")
                print("Correct number was: " + "".join(num))
            else:
                print("Cows: "+ str(cows) + " Bulls: "+ str(bulls))
        cows = 0
        bulls = 0
        count += 1