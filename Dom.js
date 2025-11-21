// Add event listener for the required form submission behavior
document.getElementById('student-form').addEventListener('submit', addStudent);

// addStudent: prevent default, validate input, create li.student-item with span + edit/delete buttons
function addStudent(event) {
  event.preventDefault();

  var input = document.getElementById('student-name');
  var studentName = input.value;

  // Validate empty input (required by spec)
  if (studentName === '') {
    alert('Please enter a student name');
    return;
  }

  // Create list item and classes
  var li = document.createElement('li');
  li.classList.add('student-item');

  // Create span for student name
  var span = document.createElement('span');
  span.textContent = studentName;

  // Create Edit button
  var editButton = document.createElement('button');
  editButton.textContent = 'Edit';
  editButton.classList.add('btn-edit');
  editButton.addEventListener('click', function () {
    editStudent(li, span);
  });

  // Create Delete button
  var deleteButton = document.createElement('button');
  deleteButton.textContent = 'Delete';
  deleteButton.classList.add('btn-delete');
  deleteButton.addEventListener('click', function () {
    deleteStudent(li);
  });

  // Append elements to li in required order
  li.appendChild(span);
  li.appendChild(editButton);
  li.appendChild(deleteButton);

  // Append li to the ul#student-list
  document.getElementById('student-list').appendChild(li);

  // Reset input and focus (required behavior)
  input.value = '';
  input.focus();
}

// deleteStudent: remove the list item (uses .remove())
function deleteStudent(studentElement) {
  studentElement.remove();
}

// editStudent: prompt() for new name; update only when non-empty (per spec)
function editStudent(studentElement, studentNameElement) {
  var newName = prompt('Enter the new name:', studentNameElement.textContent);
  if (newName !== null && newName !== '') {
    studentNameElement.textContent = newName;
  }
}

// changeListStyle: toggle 'highlight' class on all .student-item elements
function changeListStyle() {
  var students = document.querySelectorAll('.student-item');
  students.forEach(function (student) {
    student.classList.toggle('highlight');
  });
}

// Dynamically create and append the "Highlight Students" button (per spec)
var changeStyleButton = document.createElement('button');
changeStyleButton.textContent = 'Highlight Students';
changeStyleButton.addEventListener('click', changeListStyle);
document.body.appendChild(changeStyleButton);
