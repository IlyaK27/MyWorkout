<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Workout;
use App\Models\Exercise;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Stretches and Warmups
        Exercise::create([
            'title' => 'Hamstring Stretch',
            'tags' => 'Hamstring, Stretch, Warm-Up, Post-Workout',
            'description' => 'Easy stretch that can be done anywhere. It helps relieve tightened leg muscles especially after a long workout, 
            Done by grabbing your toes with your hand while seated and keeping your legs as straight as possible.',
            'logo' => 'hamstring-stretch.png'
        ]);

        Exercise::create([
            'title' => 'Arm and Wrist Stretch',
            'tags' => 'Arm, Wrist, Stretch, Post-Workout, Mobility',
            'description' => 'Easy stretch that can be done anywhere. Since the wrist is a very complex joint, preforming this stretch allows you to make sure 
            your wrist is mobile and healthy. Doing this after exercises like pushups or planks is a great way to relieve the stress of your joints.
            Done by grabbing your fingers with your other hand and pushing your hand back towards you.',
            'logo' => 'arm-and-wrist-stretch.png'
        ]);

        Exercise::create([
            'title' => 'Butterfly',
            'tags' => 'Thigh, Stretch, Warm-Up, Post-Workout',
            'description' => 'Easy stretch that can be done anywhere. It helps your adductor and inner thigh muscles. Also serves as a great hip opener to
            further increase flexibility. Done by sitting down and putting your feet together while keeping them close to your body.',
            'logo' => 'butterfly-stretch.png'
        ]);

        Exercise::create([
            'title' => 'Cobra Pose',
            'tags' => 'Abdominal, Back, Stretch, Warm-Up, Post-Workout',
            'description' => 'Easy stretch that can be done anywhere. This stretch is great for your core and back but more specifically the spine by strengthening it.
            It also provides additional toning to several other muscles such as the shoulders, arms, and glutes. 
            Done by lying down on your stomach and looking up towards the ceiling while supporting yourself with your arms.',
            'logo' => 'cobra-pose.png'
        ]);

        Exercise::create([
            'title' => 'Standing Quadricep Stretch',
            'tags' => 'Quads, Mobility, Stretch, Warm-Up, Post-Workout',
            'description' => 'Easy stretch that can be done anywhere. This stretch is great for your quads and good to do before and after any routine involving leg movement.
            Helps reduce muscle soreness and chances of injury.
            Done by standing and grabbing a wall or any tall object and then putting one hand on the top of your foot and extending your leg as much as possible.',
            'logo' => 'standing-quadricep-stretch.png'
        ]);

        Exercise::create([
            'title' => 'Treadmill',
            'tags' => 'Core, Lower-Body, Warm-Up, Cardio',
            'description' => 'Stepping on the treadmill before your workout for at least 10 minutes has been scientifically proven to improve your workout preformance. 
            If no treadmills are available to you, you can replace this with either walking outside or running as well.',
            'logo' => 'treadmill.png'
        ]);

        Exercise::create([
            'title' => 'Stairmaster',
            'tags' => 'Lower-Body, Warm-Up, Cardio',
            'description' => 'Stairmaster is an alternative to the treadmill where it will be more intensive on your calves, the stairmaster also helps strengthen the muscles
            in your legs such as the thighs and glutes.',
            'logo' => 'stairmaster.png'
        ]);

        Exercise::create([
            'title' => 'Cycling',
            'tags' => 'Core, Lower-Body, Warm-Up, Cardio',
            'description' => 'Cycling, wether indoor or outdoor is a great way to warm your body up before a workout. Aside from warming you up, it also is great for
            improving heart health, shedding fat, and boosting muscle endurance.',
            'logo' => 'cycling.png'
        ]);

        // Chest Exercises
        Exercise::create([
            'title' => 'Barbell Bench Press',
            'tags' => 'Chest, Compound, Heavy, Barbell, Intermediate',
            'description' => 'Barbell Bench Press is a very popular exercise within the gym community for its overall simplicity and benefits. However despite looking easy,
            Having proper form is very important to prevent muscle injury, First you would need to find a bench and set it to whatever inclination you need. Keep in mind, different incline
            means different part of the chest. Secondly, You want to lie down on the bench and place your feet flat on the ground. Then, with straight arms unrack the bar and lower it to your chest.
            Once you have locked your elbows, raise the bar back up.',
            'logo' => 'barbell-bench-press.png'
        ]);

        Exercise::create([
            'title' => 'Dumbell Press',
            'tags' => 'Chest, Compound, Dumbell, Beginner',
            'description' => 'Dumbell Press is a very popular exercise within the gym community and also a great alternative to the Barbell Bench Press. Like the Barbell Bench Press,
            different inclination affects different part of your chest. The movement is also very similar to its counterpart but instead of a barbell you are using 2 dumbells. The only difference
            when preforming this movement is moving your arms so they are at a 45° angle with your body. Since you are using dumbells you have more range and control of your motion making this exercise
            more safe than the Barbell Bench Press.',
            'logo' => 'dumbell-press.png'
        ]);

        Exercise::create([
            'title' => 'Cable Pec Fly',
            'tags' => 'Chest, Cables, Beginner, Intermediate',
            'description' => 'A popular variation of Dumbell Flies and uses a cable machine instead target the pectorals, with both the deltoids, 
            triceps, and core engaged to help with stability. While the arms replicate the movement of the dumbbell fly, a standing position is adopted.
            To do this, set up the handle attachments to be at the bottom of the machine. Then, bring both handles to your chest and make sure you are in the center of them.
            While in this position, take a few steps forward and after that press the weight forward. This should make your shoulders abduct and adduct while keeping your arms locked.',
            'logo' => 'cable-pec-fly.png'
        ]);

        Exercise::create([
            'title' => 'Pushup',
            'tags' => 'Chest, Bodyweight, Beginner, Intermediate',
            'description' => 'The Pushup is a very popular exercise due to its ability of being done almost anywhere and having many different variations to fit your needs.
            Pushups can be done by beginners and professionals alike. To do the standard pushup you must first get into the pushup position. Make sure your back is straight and your arms are at a 45°
            angle with your body and your shoulders are being pressed into your toes. Then go down and once your chest touches the floor or your arms are now 90°s with the floor come back up.
            You can change the way you do pushups by changing the position or elevation to make it harder or easier.',
            'logo' => 'push-up.png'
        ]);

        // Tricep Exercises
        Exercise::create([
            'title' => 'Barbell Close Grip Bench Press',
            'tags' => 'Tricep, Chest, Compound, Barbell, Beginner',
            'description' => 'While this exercise may look similar to the bench press, because your grip is shoulder width apart, the focus shifts more to your triceps.
            To preform this exercise, Lay flat on the bench with your feet on the ground. Make sure your grip is narrow and that your arms are straight. Lower the bar to your lower-mid chest
            and then push back up slowly until your elbows are locked.',
            'logo' => 'barbell-close-grip-bench-press.png'
        ]);

        Exercise::create([
            'title' => 'Cable Push Down',
            'tags' => 'Tricep, Cable, Isolated, Beginner',
            'description' => 'This exercise is a very easy and beginner friendly exercise that fully isolates your tricep. To preform this exercise, you will need a cable machine.
            Set the cable all the way to the top. Use a rope as the attachment. If a rope is not avaiable use a straight bar attachment instead. Grab onto the rope and take a 
            few steps back. You can start with your elbows in an extended or flexed position. Push your butt back slightly. Make sure your upper arms are glued to your side. Then, extend
            your elbows until you feel your triceps contract and tighten.',
            'logo' => 'cable-push-down.png'
        ]);

        Exercise::create([
            'title' => 'Barbell Skullcrusher',
            'tags' => 'Tricep, Barbell, Intermediate',
            'description' => 'This exercise has a similar movement to tricep extensions but you are instead lying flat on the bench. To preform this exercise, lie on the bench and have your feet flat
            on the ground. Take a shoulder width grip and make sure your elbows are tucked in and not flaring out. Then lower the bar closer to your head. Stop the bar when it is a few inches from your forehead and extend 
            your elbows back up.',
            'logo' => 'barbell-skullcrusher.png'
        ]);


        // Lat Exercises
        Exercise::create([
            'title' => 'Barbell Bent Over Row',
            'tags' => 'Lats, Barbell, Compound, Intermediate',
            'description' => 'The Bent Over Row is an amazing movement and utilized in most muscle building workouts. Since it is a difficult movement you can instead use a smith machine
            to make it a little easier and be able to get the form down correctly. To preform this exercise get into a standing position while holding the bar using a double overhand grip.
            Bend forward at your hips while maintaining a flat back. Pull the weight to your waist/lower abdomen. Finally, lower the weight back down and repeat slowly.',
            'logo' => 'barbell-bent-over-row.png'
        ]);

        Exercise::create([
            'title' => 'Cable Pullover',
            'tags' => 'Lats, Cable, Intermediate',
            'description' => 'The Cable Pullover is an excellent exercise that keeps your back controlled and makes it go through all the range of motion.
            To preform this exercise, first, go to a cable machine and grab preferably a flat attachment but many will work. After setting up, grab your attachment and take a few steps back.
            Push your butt back so you are leaning forward slightly. When you start pulling the attachment, do it with your shoulders. Imagine you are pulling it to your thighs.',
            'logo' => 'cable-pullover.png'
        ]);

        Exercise::create([
            'title' => 'Lat Pulldown',
            'tags' => 'Lats, Machine, Cable, Beginner',
            'description' => 'The Lat Pulldown is a staple exercise for those who want to grow a big and toned back. This exercise has a long range of motion and allows for both flexion and compression 
            of the lats. To preform this exercise, grip the bar with your palms facing forward and with a wider than shoulder width grip. Bring your torso back around 20-30°s while sticking your chest outwards.
            Pull the bar down to chin level or right before it touches your chest. While pulling down, push your shoulders back and squeeze them together. After holding it at the bottom for a second slowly go back to
            the starting position.',
            'logo' => 'lat-pulldown.png'
        ]);

        // Traps (Mid-back) Exercises
        Exercise::create([
            'title' => 'Pull Up',
            'tags' => 'Lats, Traps, Biceps, Compound, Bodyweight, Intermediate',
            'description' => 'The Pull up is a very well known exercise and also very difficult once since it requires you to have enough strength to move your entire body upwards. If you can not
            do a normal pullup there are variations such as assisted pullups, banded pullups or even decline pullups to help you build your strength for a traditional pullup. To preform a traditional
            pullup, first, grasp the bar with an overhand grip, arms and shoulders fully extended. Then, Pull your body up until your chin is above the bar. Finally, slowly lower your body to starting position.',
            'logo' => 'pull-up.png'
        ]);

        Exercise::create([
            'title' => 'Cable Silverback Shrug',
            'tags' => 'Traps, Machine, Cable, Beginner',
            'description' => 'The Cable Silverback Shrug is an excellent exercise to grow your traps and middle back. To preform this exercise, firstly, find a cable machine grab a bar attachment. You should set
            the cable all the way to the bottom. With the attachment in hand walk a couple steps back and make sure you are standing fully straight and not leaning back. Retract your shoulder blades and then protract them
            into your originals starting position.',
            'logo' => 'cable-silverback-shrug.png'
        ]);

        // Lower-back Exercises
        Exercise::create([
            'title' => 'Barbell Deadlift',
            'tags' => 'Traps, Lower-Back, Glutes, Barbell, Compound, Intermediate',
            'description' => 'The deadlift is one of the most widely known exercises in the gym community. This exercise allows you to lift a lot of weight however doing so with improper form
            can result in serious injuries. Because of this, approach this exercise with caution and make sure you get the form first before moving up in weight. To preform this exercise, 
            Stand with your mid-foot under the bar and grip the bar with your hands, about a shoulder width apart. Bend your knees, then lift the bar by straightening your back. 
            It is important to keep your back straight throught the motion. Stand to your full height and hold it for a few seconds. Lower the bar to the floor by bending your knees and keeping your back straight.',
            'logo' => 'barbell-deadlift.png'
        ]);

        Exercise::create([
            'title' => 'Machine 45 Degree Back Extension',
            'tags' => 'Lower-Back, Machine, Beginner',
            'description' => 'Lower Back extensions are very important in order to build a strong lower back and provide stability in exercises such as the Barbell Deadlift. To preform this exercise,
            first position your thighs on the padding and hook yoour feet on the platform supports. If the position feels awkward adjust the height of the machine until it suits your height. Then, 
            keeping your back straight, slowly bend at your waist until your legs and back are at a 45° angle. Finally, slowly raise your body to the starting position.',
            'logo' => 'machine-45-degree-back-extension.png'
        ]);

        // Bicep Exercises
        Exercise::create([
            'title' => 'Barbell Curl',
            'tags' => 'Bicep, Barbell, Beginner',
            'description' => 'The Barbell Curl is a relitavely easy exercise to preform that grows through all the major aspects of bicep stimulation. To preform this exercise, grab the barbell at shoulder length width.
            Then, curl the weight forward while contracting the bicep. Breath out while you are bringing the weight up. Once your biceps are fully contracted, hold it for a few seconds and then go back to the starting position.',
            'logo' => 'barbell-curl.png'
        ]);

        Exercise::create([
            'title' => 'Dumbell Hammer Curl',
            'tags' => 'Bicep, Forearm, Dumbell, Beginner',
            'description' => 'The Dumbell Hammer Curl is a great bicep exercise that affects rarely targeted parts of the bicep but also targets a small portion of the forearm. To preform this exercise, hold the dumbells with a 
            neutral grip with your thumbs facing the ceiling. Slowly lift the dumbells to chest height and after holding for a few seconds bring them back down. There are also variations where you can alternate arms instead of doing
            both at once.',
            'logo' => 'dumbell-hammer-curl.png'
        ]);

        Exercise::create([
            'title' => 'Dumbbell Single Arm Preacher Curl',
            'tags' => 'Bicep, Dumbell, Beginner',
            'description' => 'The Dumbbell Single Arm Preacher Curl is an excellent exercise to isolate the bicep and focus on control. Another variation of this exercise is to grab a barbell instead
            and do both arms at once. To preform this exercise, start with a with a dumbbell in one hand and your elbow resting on the bench. From this starting position, curl the dumbbell up towards your shoulder, 
            keeping your upper arm stationary on the bench.',
            'logo' => 'dumbell-single-arm-preacher-curl.png'
        ]);

        // Forearm Exercises
        Exercise::create([
            'title' => 'Barbell Wrist Curl',
            'tags' => 'Forearm, Barbell, Beginner',
            'description' => 'The Barbell Wrist Curl good exercise to target the forearm. Another variation of this exercise is to grab dumbells instead. To preform this exercise, Grab a straight bar with a underhand grip.
            Kneel down next to a flat bench and place your forearms on the bench with your wrists just off the bench. Let the barbell pull down on your wrists until they are extended. Curl the barbell until your wrists are fully flexed.
            Lower in a controlled manner back to starting position and repeat.',
            'logo' => 'barbell-wrist-curl.png'
        ]);

        Exercise::create([
            'title' => 'Barbell Reverse Curl',
            'tags' => 'Forearm, Barbell, Intermediate',
            'description' => 'The Barbell Reverse Curl good exercise to target the forearm while also engage your bicep. To preform this exercise, Take a double overhand grip that is about shoulder width. 
            Flex your elbows while keeping your elbows tucked in. Try not to let them flare out while preforming the motion. Curl until your forearm presses into your bicep. Then fully extend your elbows at the bottom of each rep.',
            'logo' => 'barbell-reverse-curl.png'
        ]);

        // Trap Exercises
        Exercise::create([
            'title' => 'Dumbell Shrug',
            'tags' => 'Traps, Dumbells, Beginner',
            'description' => 'The Dumbell Shrug is a very simple exercise for growing traps. To preform this exercise, stand tall with two dumbbells. Pull your shoulder blades up. Give a one second squeeze at the top.',
            'logo' => 'dumbell-shrug.png'
        ]);

        Exercise::create([
            'title' => 'Barbell Upright Row',
            'tags' => 'Shoulders, Traps, Barbell, Advanced',
            'description' => 'The Dumbell Shrug is a great simple for growing shoulders and traps. To preform this exercise, take a double overhand roughly shoulder width grip. Pull your elbows straight up the ceiling. 
            Aim to get the bar to chin level or slightly higher.',
            'logo' => 'barbell-upright-row.png'
        ]);

        // Shoulder Exercises
        Exercise::create([
            'title' => 'Dumbbell Front Raise',
            'tags' => 'Shoulders, Dumbell, Beginner',
            'description' => 'The Dumbell Front raise is a beginner friendly exercise for growing your shoulders. To preform this exercise, grab two dumbbells while standing upright with the dumbbells at your side. 
            Raise the two dumbbells with your elbows being fully extended until the dumbbells are eye level. 3 Lower the weights in a controlled manner to the starting position and repeat.',
            'logo' => 'dumbell-front-raise.png'
        ]);

        Exercise::create([
            'title' => 'Dumbbell Seated Overhead Press',
            'tags' => 'Shoulders, Dumbell, Beginner',
            'description' => 'The Dumbell Seated Overhead Press is a great simple for growing shoulders and a good substitute to Barbell Overhead Press. To preform this exercise, Sit on a bench with back support. 
            Raise the dumbbells to shoulder height with your palms forward. Raise the dumbbells upwards and pause at the contracted position. Lower the weights back to starting position.',
            'logo' => 'dumbell-seated-overhead-press.png'
        ]);

        Exercise::create([
            'title' => 'Cable Lateral Raise',
            'tags' => 'Shoulders, Cable, Beginner',
            'description' => 'The Cable Lateral Raise is a great simple exercise for developing shoulders and the cable allows you to have more control over the motion. To preform this exercise, use a handle attachment with the 
            cable set all the way to the bottom of the machine. You should vertically abduct at the shoulder raising your arm straight out to the side. Raise until your arm is parallel with the ground and then back to the starting position.',
            'logo' => 'cable-lateral-raise.png'
        ]);

        // Oblique Exercises
        Exercise::create([
            'title' => 'Dumbbell Russian Twist',
            'tags' => 'Obliques, Abdominals, Dumbell, Intermediate',
            'description' => 'The Dumbbell Russian Twist is an amazing exercise in engaging and strengthening your obliques. If doing this exercise is to hard with a dumbell the no weight variation also works. To preform this exercise,
            sit on the floor and flex your knees and hips to a 90 degree angle. Your feet should be hovering off the ground. If having your feet over the ground is too difficult start with them on the ground.
            Rotate your upper spine to engage your obliques. Actually turning your head and looking to each side helps with the mind muscle connection and engaging your obliques.',
            'logo' => 'dumbell-russian-twist.png'
        ]);

        // Abdominal Exercises
        Exercise::create([
            'title' => 'Hand Plank',
            'tags' => 'Abdominals, Bodyweight, Beginner',
            'description' => 'The Plank is a very well known exercise across the gym community for its simplicity yet how difficult it is. To preform this exercise, Start in a kneeling position with your hands planted on the ground.
            Then, kick your knees up off the ground. Hold in this position with a flat back. Make sure you are breathing during the exercise.',
            'logo' => 'hand-plank.png'
        ]);

        Exercise::create([
            'title' => 'Cable Kneeling Crunch',
            'tags' => 'Abdominals, Cabel, Beginner',
            'description' => 'The Cable Kneeling Crunch is a great exercise for isolating and engaging your core. To preform this exercise, use a double handle attachment and set the cable all the way to the top.
            Walk a few steps forward then fall into a kneeling position. Finally, push your hips back and flex your abs, then push hips forward until in the starting position. The most important part is finding the correct
            position for you so do not be discouraged if it does not work the first time.',
            'logo' => 'cable-kneeling-crunch.png'
        ]);

        // Glute Exercises
        Exercise::create([
            'title' => 'Barbell Hip Thrust',
            'tags' => 'Glutes, Barbell, Intermediate',
            'description' => 'The Barbell Hip Thrust is scientifically proven to be a great exercise to engage your glutes due to the movement preforming their main function. To preform this exercise, 
            sit on the ground with a bench behind you. Have the barbell over your legs just above your hips. Lean back against the bench so that your shoulders are resting upon it, 
            stretch your arms out to either side using the bench as support. Raise the weight by driving through your feet and extending your hips upwards. Support the weight with your shoulders and feet.
            Slowly extend as far as you can, and then finally, slowly return to the starting position.',
            'logo' => 'barbell-hip-thrust.png'
        ]);

        Exercise::create([
            'title' => 'Cable Hip Abduction',
            'tags' => 'Glutes, Cable, Beginner',
            'description' => 'The Cable Hip Abduction a great exercise for beginners to build their glutes and also improve mobility. To preform this exercise, use an ankle attachment. The cable should be set all the way to the bottom.
            Face sideways with the ankle attachment on your outside leg. Walk a few steps away. Abduct at the hips and raise your leg out to the side. Return to the starting position and stop just short of your foot touching back to the ground
            while still keeping the tension on the muscle.',
            'logo' => 'cable-hip-abduction.png'
        ]);

        // Quad Exercises
        Exercise::create([
            'title' => 'Machine Leg Extension',
            'tags' => 'Quads, Machine, Intermediate',
            'description' => 'The Machine Leg Extension a great exercise for to engage your quads in a controlled and safe manner. To preform this exercise, sit on the machine with your back against the cushion and adjust the machine you are using so that your knees are 
            at a 90 degree angle at the starting position Raise the weight by extending your knees outward, then lower your leg to the starting position. Both movements should be done in a slow, controlled motion.',
            'logo' => 'machine-leg-extension.png'
        ]);

        Exercise::create([
            'title' => 'Barbell Squat',
            'tags' => 'Quads, Barbell, Compound, Intermediate',
            'description' => 'The Barbell Squat is a very popular and important exercise when it comes to building legs. To preform this exercise, stand with your feet shoulder-width apart. 
            Maintain the natural arch in your back, squeezing your shoulder blades and raising your chest. Grip the bar across your shoulders and support it on your upper back. Unwrack the bar by straightening your legs, and take a step back.
            Bend your knees as you lower the weight without altering the form of your back until your hips are below your knees. Raise the bar back to starting position, lift with your legs and exhale at the top.',
            'logo' => 'barbell-squat.png'
        ]);

        Exercise::create([
            'title' => 'Cable Standing Leg Extension',
            'tags' => 'Quads, Machine, Intermediate',
            'description' => 'The Cable Standing Leg Extension is a phenomenal exercise to build quads while also maintaining good control of your movement. To preform this exercise, stand upright facing away from the cable crossover with the cable 
            set to the height of your hips. Use an ankle/wrist attachment. Extend at the knee against the cable.',
            'logo' => 'cable-standing-leg-extension.png'
        ]);

        // Hamstring Exercises
        Exercise::create([
            'title' => 'Machine Hamstring Curl',
            'tags' => 'Hamstring, Machine, Beginner',
            'description' => 'The Machine Hamstring Curl is a great exercise to build your hamstrings while also having a lot of control. To preform this exercise, lay down on the machine, placing your legs beneath the padded lever. 
            Position your legs so that the padded lever is below your calve muscles. Support yourself by grabbing the side handles of the machine, and slowly raise the weight with your legs, toes pointed straight.
            Pause at the end of the motion, then slowly return to starting position.',
            'logo' => 'machine-hamstring-curl.png'
        ]);

        Exercise::create([
            'title' => 'Barbell Romanian Deadlift',
            'tags' => 'Hamstring, Glutes, Lower-Back, Barbell, Intermediate',
            'description' => 'The Barbell Romanian Deadlift is a good alternative to the deadlift and good way to build your lower body. To preform this exercise, take a shoulder width, double overhand or mixed grip.
            Push your hips back while leaving your knees mostly extended. Look for a stretch in your hamstrings. When you feel the stretch, push your hips forward until you are back in a standing position.',
            'logo' => 'barbell-romanian-deadlift.png'
        ]);

        // Calve Exercises
        Exercise::create([
            'title' => 'Machine Seated Calf Raises',
            'tags' => 'Calves, Machine, Isolated, Beginner',
            'description' => 'The Machine Seated Calf Raises is an amazing exercise to isolate and train your calves. To preform this exercise, place your lower thighs beneath the padded lever. 
            Place your toes and the balls of your feet onto the foot supports. Prevent the weight from slipping forward by gripping the handles, and release the safety bar. Lower the weight until your 
            calves are extended. Push your heels up to lift the padded lever and hold the contracted position, then slowly lower back down to the starting position.',
            'logo' => 'machine-seated-calf-raise.png'
        ]);
    }
}
