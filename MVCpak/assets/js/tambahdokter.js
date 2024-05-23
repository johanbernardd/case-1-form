document.addEventListener('DOMContentLoaded', function() {
    // Custom JavaScript code for handling form submission
    console.log('Custom JavaScript is loaded and running!');
    
    // Example: Adding a confirmation dialog before deleting a doctor
    const deleteButtons = document.querySelectorAll('.btn-danger');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            if (!confirm('Are you sure you want to delete this doctor?')) {
                event.preventDefault();
            }
        });
    });
});