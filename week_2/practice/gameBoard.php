<?php
// Kajol Sutra Dhar

// Tic-Tac-Toe Game Board
$gameBoard = [
    ['', '', ''],
    ['', '', ''],
    ['', '', '']
];

// Function to display the Tic-Tac-Toe board
function displayBoard($board)
{
    foreach ($board as $row) {
        echo implode(' | ', $row) . "\n";
        echo "---------\n";
    }
}

// Make some moves
$gameBoard[0][0] = 'X';
$gameBoard[1][1] = 'O';
$gameBoard[2][2] = 'X';

// Display the updated board
displayBoard($gameBoard);
?>
