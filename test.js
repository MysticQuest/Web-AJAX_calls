var myObj = {
    people: [
        {
            firstName: 'Mike',
            lastName: 'Smith',
            age: 30,
        },
        {
            firstName: 'John',
            lastName: 'Jones',
            age: 40,
        },
    ],
    places: [
        {
            location: 'Toronto',
            lat: 87,
            long: 140,
        },
        {
            location: 'New York',
            lat: 67,
            long: 110,
        },
        {
            location: 'NewTown',
            lat: 99,
            long: 444,
        },
    ],
};

var myJSON = JSON.stringify(myObj);