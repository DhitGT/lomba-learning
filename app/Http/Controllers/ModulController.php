<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function home()
{
    $modules = [
        [
            'title' => 'Noteworthy technology acquisitions 2021',
            'description' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.',
            'image' => 'https://dheep.site/ritsu-website.PNG',
        ],
        [
            'title' => 'Tech innovations of 2023',
            'description' => 'Discover the latest innovations that are changing the tech world in 2023.',
            'image' => 'https://dheep.site/uncolonized-game.PNG',
        ],
        [
            'title' => 'AI and Machine Learning trends',
            'description' => 'A comprehensive guide on AI and machine learning advancements.',
            'image' => 'https://dheep.site/koppling-website.PNG',
        ],
        [
            'title' => 'Noteworthy technology acquisitions 2021',
            'description' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.',
            'image' => 'https://dheep.site/ritsu-website.PNG',
        ],
        [
            'title' => 'Tech innovations of 2023',
            'description' => 'Discover the latest innovations that are changing the tech world in 2023.',
            'image' => 'https://dheep.site/uncolonized-game.PNG',
        ],
        [
            'title' => 'AI and Machine Learning trends',
            'description' => 'A comprehensive guide on AI and machine learning advancements.',
            'image' => 'https://dheep.site/koppling-website.PNG',
        ],
        [
            'title' => 'Noteworthy technology acquisitions 2021',
            'description' => 'Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.',
            'image' => 'https://dheep.site/ritsu-website.PNG',
        ],
        [
            'title' => 'Tech innovations of 2023',
            'description' => 'Discover the latest innovations that are changing the tech world in 2023.',
            'image' => 'https://dheep.site/uncolonized-game.PNG',
        ],
        [
            'title' => 'AI and Machine Learning trends',
            'description' => 'A comprehensive guide on AI and machine learning advancements.',
            'image' => 'https://dheep.site/koppling-website.PNG',
        ],

    ];

    return view('home', compact('modules'));
}

public function create()
    {

        return view('create');
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|url',
        ]);

        Modul::create($validatedData);


        return redirect()->route('moduls.create')->with('success', 'Module created successfully!');
    }

    public function show($id)
    {
        // Dummy data for demonstration
        $modules = [
            1 => [
                'title' => 'JavaScript Basics',
                'description' => 'Learn the fundamentals of JavaScript, a key language for web development.',
                'content' => '
                <h2>Introduction to JavaScript</h2>
                <p>JavaScript is a versatile and powerful programming language used primarily for creating dynamic and interactive content on web pages. It is an essential skill for web developers and is widely used across different platforms and frameworks.</p>
                <p>In this module, you will start with the basics of JavaScript and gradually move to more advanced topics. We will cover core concepts and provide practical examples to help you understand how JavaScript works.</p>

                <h3>Topics Covered:</h3>
                <ul>
                    <li><strong>Variables and Data Types:</strong> Learn about different types of data and how to store them in variables.</li>
                    <li><strong>Functions:</strong> Understand how to create and use functions to organize your code.</li>
                    <li><strong>DOM Manipulation:</strong> Discover how to interact with and modify the HTML document.</li>
                    <li><strong>Events:</strong> Learn about handling user interactions such as clicks and form submissions.</li>
                </ul>

                <h3>Getting Started:</h3>
                <p>Before diving into JavaScript, make sure you have a basic understanding of HTML and CSS. JavaScript works in conjunction with these technologies to build interactive websites.</p>

                <h3>Key Concepts:</h3>
                <p><strong>Variables:</strong> Variables are containers for storing data values. JavaScript uses the <code>let</code>, <code>const</code>, and <code>var</code> keywords to declare variables.</p>
                <p><strong>Data Types:</strong> JavaScript supports several data types including <code>string</code>, <code>number</code>, <code>boolean</code>, <code>object</code>, and <code>array</code>.</p>

                <h3>Examples:</h3>
                <pre><code>
// Declaring a variable
let message = "Hello, World!";

// Function to display the message
function displayMessage() {
    console.log(message);
}

// Calling the function
displayMessage();
                </code></pre>

                <h3>Practice Exercises:</h3>
                <ol>
                    <li>Create a simple JavaScript program that displays a message on the web page.</li>
                    <li>Write a function that takes user input and performs basic arithmetic operations.</li>
                    <li>Experiment with DOM manipulation by creating interactive elements on a web page.</li>
                </ol>

                <h3>Conclusion:</h3>
                <p>By the end of this module, you should have a solid understanding of the basic concepts of JavaScript. Continue practicing and exploring more advanced topics to enhance your skills further.</p>
                ',
                'image' => 'https://dheep.site/uncolonized-game.PNG'
            ],
            2 => [
                'title' => 'Advanced CSS',
                'description' => 'Dive deeper into CSS to master advanced styling techniques.',
                'content' => '
                <h2>Introduction to Advanced CSS</h2>
                <p>CSS (Cascading Style Sheets) is used to style and layout web pages. Advanced CSS techniques can help you create sophisticated and visually appealing designs. This module covers advanced concepts like flexbox, grid layout, and animations.</p>

                <h3>Topics Covered:</h3>
                <ul>
                    <li><strong>Flexbox:</strong> Learn how to create flexible and responsive layouts using the flexbox layout model.</li>
                    <li><strong>Grid Layout:</strong> Understand how to build complex grid-based designs with the CSS Grid Layout.</li>
                    <li><strong>Animations:</strong> Discover how to add animations and transitions to enhance user experience.</li>
                    <li><strong>Responsive Design:</strong> Explore techniques to make your design responsive and adapt to various screen sizes.</li>
                </ul>

                <h3>Getting Started:</h3>
                <p>Make sure you have a solid understanding of basic CSS before diving into advanced topics. Knowledge of HTML and CSS fundamentals is essential for mastering advanced techniques.</p>

                <h3>Key Concepts:</h3>
                <p><strong>Flexbox:</strong> The flexbox layout module provides an easy way to create flexible and responsive layouts. It allows you to align and distribute space among items in a container.</p>
                <p><strong>Grid Layout:</strong> CSS Grid Layout enables you to create complex grid structures. It provides a two-dimensional layout system that handles both columns and rows.</p>

                <h3>Examples:</h3>
                <pre><code>
/* Flexbox example */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Grid Layout example */
.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
}
                </code></pre>

                <h3>Practice Exercises:</h3>
                <ol>
                    <li>Create a responsive navigation bar using flexbox.</li>
                    <li>Design a complex layout using CSS Grid.</li>
                    <li>Implement animations and transitions to improve user interaction on your site.</li>
                </ol>

                <h3>Conclusion:</h3>
                <p>Advanced CSS techniques are powerful tools for web design. Practice and experimentation will help you become proficient in these techniques and enhance your web development skills.</p>
                ',
                'image' => 'https://dheep.site/uncolonized-game.PNG'
            ],
            // Add more modules as needed
        ];

        $module = $modules[$id] ?? null;

        if (!$module) {
            abort(404);
        }

        return view('module.show', compact('module'));
    }

}


