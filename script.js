function toggleStatus(id) {
    const row = document.querySelector(`#row-${id}`);
    const statusCell = row.querySelector('.status');
    const toggleButton = row.querySelector('button');

    toggleButton.disabled = true;

    fetch('toggle.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: 'id=' + encodeURIComponent(id)
    })
        .then(response => response.text())
        .then(status => {
            statusCell.style.transition = 'opacity 0.4s ease';
            statusCell.style.opacity = 0;

            setTimeout(() => {
                statusCell.innerText = status;
                statusCell.style.opacity = 1;
            }, 400);

            showMessage(`Status for user #${id} updated to "${status}"`);
            toggleButton.disabled = false;
        })
        .catch(() => {
            showMessage('Failed to update status.', true);
            toggleButton.disabled = false;
        });
}

function showMessage(text, isError = false) {
    const msgDiv = document.getElementById('message');
    msgDiv.textContent = text;
    msgDiv.style.backgroundColor = isError ? '#DB0030' : '#808380ff';
    msgDiv.style.opacity = 1;
    msgDiv.style.pointerEvents = 'auto';

    setTimeout(() => {
        msgDiv.style.opacity = 0;
        msgDiv.style.pointerEvents = 'none';
    }, 3000);
}
