const daysTag = document.querySelector(".days"),
  currentDate = document.querySelector(".current-date"),
  prevNextIcon = document.querySelectorAll(".icons span"),
  notesContainer = document.querySelector(".catatan ul");

let date = new Date(),
  currYear = date.getFullYear(),
  currMonth = date.getMonth(),
  notes = {}; // Object to store notes for each date

const months = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December",
];

const renderCalendar = () => {
  let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(),
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(),
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(),
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate();

  let liTag = "";

  for (let i = firstDayofMonth; i > 0; i--) {
    const prevMonthDays = new Date(currYear, currMonth, 0).getDate();
    liTag += `<li class="inactive">${prevMonthDays - i + 1}</li>`;
  }

  for (let i = 1; i <= lastDateofMonth; i++) {
    let isToday =
      i === date.getDate() &&
      currMonth === date.getMonth() &&
      currYear === date.getFullYear()
        ? "active"
        : "";
    let hasNotes = notes[`${currYear}-${currMonth + 1}-${i}`]
      ? "has-notes"
      : "";

    liTag += `<li class="${isToday} ${hasNotes}" onclick="updateNotes(${i})">${i}</li>`;
  }

  for (let i = lastDayofMonth; i < 6; i++) {
    liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
  }

  currentDate.innerText = `${months[currMonth]} ${currYear}`;
  daysTag.innerHTML = liTag;

  // Highlight dates with notes
  const highlightedDates = document.querySelectorAll(".has-notes");
  highlightedDates.forEach((date) => {
    date.innerHTML = `<span class="date-content">${date.textContent}</span>`;
  });

  // Display notes in the .catatan element
  displayNotes();
};

// Function to display notes in the .catatan element
const displayNotes = () => {
  const notesList = document.querySelector(".catatan ul");
  notesList.innerHTML = "";

  for (const date in notes) {
    const [year, month, day] = date.split("-");
    const noteDate = new Date(year, month - 1, day);
    const formattedDate = noteDate.toLocaleDateString("en-US", {
      year: "numeric",
      month: "long",
      day: "numeric",
    });

    const noteItem = document.createElement("li");
    noteItem.textContent = `${formattedDate}: ${notes[date]}`;
    notesList.appendChild(noteItem);
  }

  const catatan = document.querySelector(".catatan");
  catatan.style.height =
    Math.max(notesContainer.children.length * 30, 100) + "px";
};

const updateNotes = (day) => {
  const selectedDate = `${currYear}-${currMonth + 1}-${day}`;
  const existingNote = notes[selectedDate] || "";

  if (existingNote !== "") {
    const userAction = prompt(
      `Catatan untuk tanggal ${day}/${
        currMonth + 1
      }/${currYear}:\n\n${existingNote}\n\nPilih aksi:\n1. Update\n2. Hapus`
    );

    if (userAction === "1") {
      const userNote = prompt("Masukkan catatan baru:", existingNote);
      if (userNote !== null) {
        notes[selectedDate] = userNote;
        renderCalendar();
        saveNotesToLocalStorage();
      }
    } else if (userAction === "2") {
      deleteNote(selectedDate);
    }
  } else {
    const userNote = prompt(
      `Catatan untuk tanggal ${day}/${currMonth + 1}/${currYear}:`,
      existingNote
    );

    // Check if userNote is not null and not an empty string
    if (userNote !== null && userNote.trim() !== "") {
      notes[selectedDate] = userNote;
      renderCalendar();
      saveNotesToLocalStorage();
    }
  }
};

const deleteNote = (selectedDate) => {
  if (
    confirm(`Anda yakin ingin menghapus catatan untuk tanggal ${selectedDate}?`)
  ) {
    delete notes[selectedDate];
    renderCalendar();
    saveNotesToLocalStorage();
  }
};

const saveNotesToLocalStorage = () => {
  localStorage.setItem("notes", JSON.stringify(notes));
};

const loadNotesFromLocalStorage = () => {
  const storedNotes = localStorage.getItem("notes");
  if (storedNotes) {
    notes = JSON.parse(storedNotes);
    renderCalendar();
  }
};

prevNextIcon.forEach((icon) => {
  icon.addEventListener("click", () => {
    currMonth = icon.id === "prev" ? currMonth - 1 : currMonth + 1;

    if (currMonth < 0 || currMonth > 11) {
      currYear = icon.id === "prev" ? currYear - 1 : currYear + 1;
      currMonth = icon.id === "prev" ? 11 : 0;
    }
    renderCalendar();
  });
});

// Load notes from local storage on page load
loadNotesFromLocalStorage();
