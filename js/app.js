// app.js

const express = require('express');
const mysql = require('mysql2');
const bodyParser = require('body-parser');

const app = express();
const port = 3000;

// Database connection configuration
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'your_password',
    database: 'travel_agency'
});

// Connect to the database
db.connect((err) => {
    if (err) {
        console.error('Error connecting to MySQL:', err);
    } else {
        console.log('Connected to MySQL database');
    }
});

app.use(bodyParser.json());

// Define your API endpoints here

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
// ...

// Endpoint to get all flights
app.get('/flights', (req, res) => {
    const query = 'SELECT * FROM flights';

    db.query(query, (err, results) => {
        if (err) {
            console.error('Error executing query:', err);
            res.status(500).json({ error: 'Internal Server Error' });
        } else {
            res.status(200).json(results);
        }
    });
});

// Endpoint to add a new flight
app.post('/flights', (req, res) => {
    const { airline, origin, destination, departure_time, price } = req.body;
    const query = 'INSERT INTO flights (airline, origin, destination, departure_time, price) VALUES (?, ?, ?, ?, ?)';
    const values = [airline, origin, destination, departure_time, price];

    db.query(query, values, (err, results) => {
        if (err) {
            console.error('Error executing query:', err);
            res.status(500).json({ error: 'Internal Server Error' });
        } else {
            res.status(201).json({ message: 'Flight added successfully' });
        }
    });
});

// Other endpoints for updating and deleting flights can be added similarly

// ...
