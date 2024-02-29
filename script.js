document.addEventListener('DOMContentLoaded', function () {
    // Mock data for available rooms
    const availableRooms = [
        { id: 1, name: 'Room A' },
        { id: 2, name: 'Room B' },
        { id: 3, name: 'Room C' },
    ];

    // Generate calendar
    const calendar = document.getElementById('calendar');
    const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    for (let i = 0; i < days.length; i++) {
        const dayElement = document.createElement('div');
        dayElement.textContent = days[i];
        calendar.appendChild(dayElement);
    }

    // Display available rooms
    const roomInfo = document.getElementById('roomInfo');
    availableRooms.forEach(room => {
        const roomElement = document.createElement('div');
        roomElement.textContent = room.name;
        roomElement.addEventListener('click', () => bookRoom(room.id, room.name));
        roomInfo.appendChild(roomElement);
    });

    // Function to handle room booking
    function bookRoom(roomId, roomName) {
        alert(`Room ${roomName} booked!`);
    }
    <a href="dc.html"></a>
});

