# Wordle Game preview

![Example Image](assets/wordleexample.png)
## Rules
1. **Objective:** Guess the secret word.
2. The secret word is a 5-letter word.
3. You have 6 attempts to guess the correct word.
4. After each guess, you will receive feedback:
   - A <span style="color: green; font-weight: bold;">green square</span> means a correct letter in the correct position.
   - A <span style="color: yellow; font-weight: bold;">yellow square</span> means a correct letter in the wrong position.
   - A <span style="color: gray; font-weight: bold;">gray square</span> means an incorrect letter.
5. there's a list of word that you can use so can you cannot type in random stuff
## Fonts
| Font Name     | Provider          | Description                    |
| ------------- | ----------------- | ------------------------------ |
| Open Sans     | Google Fonts      | Friendly sans-serif            |
| Lato          | Google Fonts      | Modern sans-serif              |

## Components
 The game will be played on a 6x6 grid like this:

![Example grid](assets/grid.png)

In the case of a good answer:

![Example correct answer](assets/Green.png)

In the case of a good letter but in the wrong place:

![Example corect but wrong place](assets/yellow.png)

if the letter is not in the word:

![Example not here](assets/Grey.png)

## Guesses example
- **Guess 1:** [ ] [ ] [ ] [ ] [ ]
- **Guess 2:** [X] [X] [X] [X] [X]
- **Guess 3:** [X] [Y] [X] [X] [X]
- **Guess 4:** [Z] [X] [Y] [Y] [X]
- **Guess 5:** [Z] [X] [Z] [Z] [X]
- **Guess 6:** [Z] [Z] [Z] [Z] [Z]

## Legend
- [ ]: Placeholder for a letter (empty square)
- [X]: Incorrect letter
- [Y]: Correct letter in the wrong position
- [Z]: Correct letter in the correct position

## Here's an actual example

![Example](assets/exampleGame.png)

If you win, all the square will be green. We can see that the yellow square we're right letters but at the wrong place. Grey squares we're letters not in the word.

## Example where you lose

![Example](assets/wordleLose.png)

# when you enter an invalid word

![Example](assets/invalid.png)

That's what happens when you enter an invalid word.



