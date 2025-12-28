function delayedAlert(message, delay) {
  setTimeout(() => {
    alert(message);
  }, delay);
}

// Call it
delayedAlert("Pakistan Zindabad", 3000);
