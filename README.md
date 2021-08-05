# microverse-capstone-2-api

---


![Microverse](https://img.shields.io/badge/Microverse-blueviolet)

This API has been created to provide an object with data mocking a restaurant menu.
The app that consumes its data can be seen here :
- [JavaScript-capstone-project](https://github.com/Mhdez221993/JavaScript-capstone-project)
- [Live](https://mhdez221993.github.io/JavaScript-capstone-project//)

The object retrieved looks like this:

```cmd
{
body: [
{
id: "1",
name: "hotdog",
type: "food",
price: "4.50",
ingredients: "Sausage, salat, cheese",
image: "https://microverse.abi.api.waldenberginc.com/images/hotdog.png",
created: "2012-06-01 02:12:30"
},
{
id: "2",
name: "sandwich",
type: "food",
price: "5.50",
ingredients: "Bread, salad, hame & cheese",
image: "https://microverse.abi.api.waldenberginc.com/images/sandwich.png",
created: "2013-03-03 01:20:10"
},
{
id: "3",
name: "tacos",
type: "food",
price: "3.50",
ingredients: "Tortilla, meat, salad",
image: "https://microverse.abi.api.waldenberginc.com/images/tacos.png",
created: "2014-09-20 03:10:25"
},
{
id: "4",
name: "burger",
type: "food",
price: "2.50",
ingredients: "burger",
image: "https://microverse.abi.api.waldenberginc.com/images/burger.png",
created: "2015-04-11 04:11:12"
},
{
id: "5",
name: "fries",
type: "food",
price: "2.50",
ingredients: "Potatoes",
image: "https://microverse.abi.api.waldenberginc.com/images/fries.png",
created: "2016-01-04 05:20:30"
},
{
id: "6",
name: "pizza",
type: "food",
price: "8.45",
ingredients: "Mozzarella, tomato, meat",
image: "https://microverse.abi.api.waldenberginc.com/images/pizza.png",
created: "2017-01-10 06:40:10"
},
{
id: "7",
name: "doughnut",
type: "food",
price: "2.50",
ingredients: "Delicious donuts",
image: "https://microverse.abi.api.waldenberginc.com/images/doughnut.png",
created: "2018-01-04 05:15:35"
},
{
id: "8",
name: "drinks",
type: "drink",
price: "1.50",
ingredients: "Soda",
image: "https://microverse.abi.api.waldenberginc.com/images/drink.png",
created: "2019-01-02 02:20:30"
}
]
}
```

### Usage

```cmd
GET - https://microverse.abi.api.waldenberginc.com/api/read.php Fetch ALL Records
GET - https://microverse.abi.api.waldenberginc.com/api/single_read.php/?id=2 Fetch Single Record
POST - https://microverse.abi.api.waldenberginc.com/api/create.php Create Record
POST - https://microverse.abi.api.waldenberginc.com/api/update.php Update Record
DELETE - https://microverse.abi.api.waldenberginc.com/api/delete.php Remove Records
 
``` 

### Setup

- Place the content of this repo inside the directory /public.html/ of your server or localhost.
- Create and configure a SQL database with parameters shown in the object above.
- Store the config file in a folder out of /public.html/

```cmd
git clone https://github.com/Metsanpeitto/microverse-capstone-2-api.git
cd microverse-capstone-2-api
```

If you are non a technical person you can download the zip file.

- To do that you have to go to the green button that says 'Code' and then press on it.
- Choose the option 'Download Zip' and wait until it download.
- Then you need to decompress it.
- You will need to have Zip compress file software installed in your computer. If you don't have it you can download it from here
  [JavaScript-capstone-project`](https://github.com/Mhdez221993/JavaScript-capstone-project/archive/refs/heads/feature-setup.zip)
- Do double click on the Capstone-1.zip and choose a folder where to place all teh decompressed files.
- Once you are done decompressing, you can open the created folder.
- In it you can double click on the index.html file and choose a browser to open it (For example google Chrome Browser).
- Now you should be able to see the project.
- Remember to use the mouse to navigate through the website. Also you can use the keys 'arrow up' and 'arrow down' of your keyboard
  to scroll up and down.


### Prerequisites

- A server where to deploy php

=======

## Author

👤 **Abraham Rodriguez**

- GitHub: [@metsanpeitto](https://github.com/Metsanpeitto)
- Twitter: [@metsanpeitto](https://twitter.com/home)
- LinkedIn: [Abraham Rodriguez](https://www.linkedin.com/in/abraham-rodriguez-3283a319a/)
- Portfolio: [Waldenberg](https://portfolio.waldenberginc.com)

=======

## 🤝 Contributing

Contributions, issues, and feature requests are welcome!

Feel free to check the [issues page](../../issues/).

=======

## Show your support

Give a ⭐️ if you like this project!

=======

[![License: CC BY-NC 4.0](https://licensebuttons.net/l/by-nc/4.0/80x15.png)](https://creativecommons.org/licenses/by-nc/4.0/)
[![License: CC0-1.0](https://licensebuttons.net/l/zero/1.0/80x15.png)](http://creativecommons.org/publicdomain/zero/1.0/)
[![License](https://img.shields.io/badge/License-Apache%202.0-blue.svg)](https://opensource.org/licenses/Apache-2.0)
