const cardsArray = [{
    'name': 'grain',
    'img': '/images/memory/grain.jpeg',
  },
  {
    'name': 'fish',
    'img': '/images/memory/fish.jpeg',
  },
  {
    'name': 'timber',
    'img': '/images/memory/timber.jpeg',
  },
  {
    'name': 'cloth',
    'img': '/images/memory/cloth.jpeg',
  },
  {
    'name': 'honey',
    'img': '/images/memory/honey.jpg',
  },
  {
    'name': 'sheep',
    'img': '/images/memory/sheep.jpeg',
  },
  {
    'name': 'copper',
    'img': '/images/memory/copper.jpg',
  },
  {
    'name': 'potash',
    'img': '/images/memory/potash.jpg',
  },
  {
    'name': 'stone',
    'img': '/images/memory/stone.jpeg',
  },
];
// Duplicate array to create a match for each card
let gameGrid = cardsArray.concat(cardsArray);

// Randomize game grid on each load
gameGrid.sort(() => 0.5 - Math.random());

// Grab the div with an id of root
const game = document.getElementById('game');

// Create a section with a class of grid
const grid = document.createElement('section');
grid.setAttribute('class', 'grid');

// Append the grid section to the game div
game.appendChild(grid);

// For each item in the cardsArray array
gameGrid.forEach(item => {
      // Create a div
const card = document.createElement('div');
  // Apply a card class to that div
card.classList.add('card');
  // Set the data-name attribute of the div to the cardsArray name
card.dataset.name = item.name;
  // Create front of card
  const front = document.createElement('div');
  front.classList.add('front');
    // Create back of card, which contains 
    const back = document.createElement('div');
    back.classList.add('back');
    back.style.backgroundImage = `url(${item.img})`;
  // Apply the background image of the div to the cardsArray image
  card.style.backgroundImage = `url(${item.img})`;

  // Append card to grid, and front and back to each card
  grid.appendChild(card);
  card.appendChild(front);
  card.appendChild(back);
});


let firstGuess = '';
let secondGuess = '';
let count = 0;
let previousTarget = null;
let delay = 1000;
let matches = 0;


// Add match CSS
const match = () => {
  var selected = document.querySelectorAll('.selected');
  selected.forEach(card => {
    card.classList.add('match');
  });
}

// Add event listener to grid
grid.addEventListener('click', function (event) {
  // The event target is our clicked item
let clicked = event.target;
  // Do not allow the grid section itself to be selected; only select divs inside the grid
  if (
    clicked.nodeName === 'SECTION' ||
    clicked === previousTarget ||
    clicked.parentNode.classList.contains('selected')
    || clicked.parentNode.classList.contains('match')
  ) {
    return;
  }

if (count <2) {
  count++;
  if (count === 1) {
    // Assign first guess
    firstGuess = clicked.parentNode.dataset.name;
    console.log(firstGuess);
    clicked.parentNode.classList.add('selected');
  } else {
    secondGuess = clicked.parentNode.dataset.name;
    console.log(firstGuess);
    clicked.parentNode.classList.add('selected');
  }
      // If both guesses are not empty...
if (firstGuess !== '' && secondGuess !== '' ){
        // and the first guess matches the second match...
if (firstGuess === secondGuess) {
  setTimeout(match, delay);
  setTimeout(resetGuesses, delay);
  matches++;
  console.log(matches);
    } else {
      setTimeout(resetGuesses, delay);
    }
  }
    // Set previous target to clicked  
    previousTarget = clicked;
}

if (matches == 9) {
  document.getElementById('progressdiv').style.display = 'block';
};
});

const resetGuesses = () => {
  firstGuess = '';
  secondGuess = '';
  count = 0;
  previousTarget = null;

  var selected = document.querySelectorAll('.selected');
  selected.forEach(card => {
    card.classList.remove('selected');
  });
};

