<?php
// Sample dynamic data for the landing page
$featured_bikes = [
    [
        'id' => 1,
        'name' => 'AeroX Pro',
        'type' => 'Road Bike',
        'price' => '$2,499',
        'image' => 'https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?auto=format&fit=crop&q=80&w=800',
        'description' => 'The AeroX Pro is built for speed and aerodynamic efficiency. With a full carbon frame and electronic shifting, you will conquer the flats and crush the climbs with ease.',
        'specs' => ['Frame: Carbon Fiber', 'Gears: 22-Speed Electronic', 'Brakes: Hydraulic Disc', 'Weight: 7.8kg']
    ],
    [
        'id' => 2,
        'name' => 'Trail Blazer',
        'type' => 'Mountain Bike',
        'price' => '$1,899',
        'image' => 'https://images.unsplash.com/photo-1507035895480-2b3156c31fc8?auto=format&fit=crop&q=80&w=800',
        'description' => 'Tackle the toughest terrain with the Trail Blazer. Featuring full suspension and wide, grippy tires, this mountain bike offers ultimate control and comfort on any trail.',
        'specs' => ['Frame: Aluminum Alloy', 'Suspension: Full (140mm Travel)', 'Gears: 12-Speed', 'Weight: 14.2kg']
    ],
    [
        'id' => 3,
        'name' => 'City Commuter',
        'type' => 'Urban/Hybrid',
        'price' => '$899',
        'image' => 'https://images.unsplash.com/photo-1485965120184-e220f721d03e?auto=format&fit=crop&q=80&w=800',
        'description' => 'The City Commuter is your perfect daily driver. Comfortable upright geometry, integrated lights, and a sturdy rack make it ideal for commuting or weekend cruising.',
        'specs' => ['Frame: Lightweight Aluminum', 'Gears: 8-Speed Internal Hub', 'Brakes: Mechanical Disc', 'Extras: Fenders, Rack, Lights']
    ],
    [
        'id' => 4,
        'name' => 'Gravel Grinder X',
        'type' => 'Gravel Bike',
        'price' => '$2,199',
        'image' => 'https://images.unsplash.com/photo-1511994298241-608e28f14fde?auto=format&fit=crop&q=80&w=800',
        'description' => 'Explore unpaved roads and discover new adventures. The Gravel Grinder X combines road bike speed with off-road capability for the ultimate versatile ride.',
        'specs' => ['Frame: Carbon Fiber', 'Gears: 11-Speed 1x', 'Brakes: Hydraulic Disc', 'Tires: 40c Tubeless']
    ],
    [
        'id' => 5,
        'name' => 'Speedster 500',
        'type' => 'Track Bike',
        'price' => '$1,299',
        'image' => 'https://images.unsplash.com/photo-1471506480208-91b3a4cc78be?auto=format&fit=crop&q=80&w=800',
        'description' => 'Pure speed on the velodrome or the streets. The Speedster 500 is a fixed-gear marvel designed for maximum power transfer and minimalist aesthetics.',
        'specs' => ['Frame: Track Aluminum', 'Gears: Single Speed / Fixed', 'Brakes: Front Caliper Only', 'Weight: 8.5kg']
    ],
    [
        'id' => 6,
        'name' => 'Eco Cruiser',
        'type' => 'Electric Bike',
        'price' => '$2,899',
        'image' => 'https://images.unsplash.com/photo-1528629297340-d1d466945dc5?auto=format&fit=crop&q=80&w=800',
        'description' => 'Flatten the hills and extend your range. The Eco Cruiser features a seamlessly integrated battery and powerful motor to assist your ride up to 20mph.',
        'specs' => ['Frame: Aluminum Alloy', 'Motor: 250W Mid-Drive', 'Battery: 500Wh Integrated', 'Range: Up to 60 miles']
    ]
];

// Testimonials Data
$testimonials = [
    [
        'name' => 'Sarah Jenkins',
        'role' => 'Professional Cyclist',
        'content' => 'The AeroX Pro completely transformed my racing. The stiffness to weight ratio is unlike anything I\'ve ever ridden. Truly a masterpiece of engineering.',
        'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=150'
    ],
    [
        'name' => 'Michael Chang',
        'role' => 'Daily Commuter',
        'content' => 'I bought the City Commuter 6 months ago, and I haven\'t driven to work since. It\'s comfortable, incredibly reliable, and looks fantastic.',
        'image' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=150'
    ],
    [
        'name' => 'Elena Rodriguez',
        'role' => 'Mountain Trail Guide',
        'content' => 'We use the Trail Blazer for all our guided tours. They take a massive beating every single day and just keep performing flawlessly.',
        'image' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=150'
    ]
];

// Blog Posts Data
$blog_posts = [
    [
        'id' => 1,
        'title' => 'Mastering the Mountain: 5 Tips for Technical Descents',
        'date' => 'October 12, 2026',
        'category' => 'Guides',
        'image' => 'https://images.unsplash.com/photo-1511994298241-608e28f14fde?auto=format&fit=crop&q=80&w=800',
        'excerpt' => 'Technical descents can be intimidating, but with the right body positioning and brake control, you can conquer any trail.',
        'content' => '<p>Technical descents can be the most exhilarating part of a mountain bike ride, but they also require the most skill and focus. Here are five tips to help you master technical descents:</p><h3>1. Keep Your Weight Back</h3><p>When descending steep terrain, shift your weight back over the rear wheel. This prevents you from going over the handlebars and gives you more control.</p><h3>2. Use Both Brakes</h3><p>Don\'t rely solely on the rear brake. Modulate both the front and rear brakes for maximum stopping power and control without skidding.</p><h3>3. Look Ahead</h3><p>Your bike goes where your eyes go. Focus on the line you want to take, not the obstacles you want to avoid.</p>'
    ],
    [
        'id' => 2,
        'title' => 'The Future of Carbon Fiber: Lighter, Stronger, Greener',
        'date' => 'September 28, 2026',
        'category' => 'Technology',
        'image' => 'https://images.unsplash.com/photo-1471506480208-91b3a4cc78be?auto=format&fit=crop&q=80&w=800',
        'excerpt' => 'Discover how new manufacturing processes are creating bicycle frames that are not only faster but also more environmentally friendly.',
        'content' => '<p>Carbon fiber has revolutionized the cycling industry, providing frames that are incredibly light and stiff. But traditional manufacturing processes can be energy-intensive and produce waste.</p><p>Recent advancements in materials science are changing that. Manufacturers are now developing bio-based resins and recyclable carbon fiber composites.</p><h3>The Green Revolution in Manufacturing</h3><p>New "green" carbon fiber uses sustainable precursors and closed-loop recycling processes, dramatically reducing the carbon footprint of production while maintaining or even improving the structural integrity of the frame.</p>'
    ],
    [
        'id' => 3,
        'title' => 'Winter Riding: Essential Gear to Keep You Warm',
        'date' => 'September 15, 2026',
        'category' => 'Gear Review',
        'image' => 'https://images.unsplash.com/photo-1532298229144-0ec0c57515c7?auto=format&fit=crop&q=80&w=800',
        'excerpt' => 'Don\'t let the cold weather stop your training. Here is our comprehensive guide to layering up for those freezing morning rides.',
        'content' => '<p>Winter riding can be beautiful and rewarding, provided you have the right gear. The key to staying warm is proper layering.</p><h3>1. The Base Layer</h3><p>Start with a high-quality, moisture-wicking base layer (merino wool is excellent) to keep sweat away from your skin.</p><h3>2. The Mid Layer</h3><p>Add a thermal jersey for insulation. This layer traps your body heat.</p><h3>3. The Outer Shell</h3><p>A windproof and waterproof jacket protects you from the elements. Don\'t forget thermal bib tights, winter gloves, and shoe covers!</p>'
    ]
];
