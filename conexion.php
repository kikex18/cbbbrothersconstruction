<?php
//$link = mysqli_connect("localhost", "aa_000taq", "N-4-nRu?KAdX", "aa_000taq");
$link = mysqli_connect("localhost", "root", "", "bd_testimonials");

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$Testimonials = array(
    //HOMEADVISOR
    array(
        "Review"       => "Review by William S. in Katy, TX",
        "Project"      => "Install a Wood Fence",
        "Comment"      => "Excellent job. Completed this repair in less than a day. Understood that we had pets so tried to get it put back up as fast as possible after they tore down the bad portion. Best price quote received from 4 companies. CBB will perform all of my construction and painting needs from now on.",
        "date"         => "07/16/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by William S. in Katy, TX",
        "Project"      => "Paint or Stain Exterior Surfaces",
        "Comment"      => "I am not able to choose all of the services I hired CBB Brothers for. They have repaired my fence. Excellent job and best price given. I had them paint the outside of my house. Very nice job, professional, and very clean. They have cleaned up after themselves after each job. They repaired and painted my back door and door frame. Instead of selling me a door replacement, Daniel told me they could fix the issue. Thumbs up for not taking advantage of a not so handy man. Finally I hired CBB brothers to replace all of my expansion joints on my driveway and sidewalk. CBB is now my complete construction company for life. We have several other projects and I promise CBB will be hired for the job. I have been trying to find a company like this for decades and I have finally found them. Daniel, Thanks to you your company and the very professional employees you have hired. Its so nice to see a company who takes pride in doing a good job and making the client happy. (By doing a professional job the first time).",
        "date"         => "07/16/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Bill T. in Houston, TX",
        "Project"      => "Install or Repair Siding",
        "Comment"      => "One call and one visit to quote the job and they were hired. Easy to get a hold of, easy to work with professional, one time and the work being completed looks great. Book em!",
        "date"         => "07/05/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Adriano C. in Houston, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "Service was done well, quickly, no hassle.",
        "date"         => "12/30/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Dani J. in Houston, TX",
        "Project"      => "Paint, Varnish or Stain Interior Surfaces",
        "Comment"      => "Daniel and his team were awesome from the start! Quality work, competitive prices, great customer service and competent professionals. They’re committed to doing the work RIGHT, and I would definitely hire them again for future projects!",
        "date"         => "11/15/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by James M. in Houston, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "Great work. Fast. Professional crew. Competitive and fair pricing. I highly recommend.",
        "date"         => "10/08/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Jim B. in Houston, TX",
        "Project"      => "Install or Repair a Sink",
        "Comment"      => "I have used CBB for multiple jobs. Always reliable, dependable, efficient, and reasonable pricing. All the qualities you want in a contractor.",
        "date"         => "08/22/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Kim B. in Katy, TX",
        "Project"      => "Paint, Varnish or Stain Interior Surfaces",
        "Comment"      => "In addition to painting the living room and master bedroom, baseboards and quarter round had to be replaced. The team did an excellent job matching the stain so it looks like the original! There was some plaster repair and caulking needed around the windows that was well done. Will use CBB Brothers again!",
        "date"         => "08/14/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Robert P. in Richmond, TX",
        "Project"      => "Paint or Stain Exterior Surfaces",
        "Comment"      => "CBB Brothers was a real pleasure to work with. Daniel exemplifies the word professional at its best. It would be hard pressed to find another contractor that provides the level of care and detail that Daniel and his crew provided throughout my project. If you should ever be in need of any work for your home, it would be beneficial for you to contact CBB Brothers for at least a consultation visit. Once you talk to him, I can assure you that you will hire him as well. I can grant you; this will not be the last time CBB Brothers will be hearing from me!",
        "date"         => "08/14/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Donald G. in Richmond, TX",
        "Project"      => "Paint, Varnish or Stain Interior Surfaces",
        "Comment"      => "On time, professional, cleaned up as they went, best price, real experienced paint craftsman, superior warranty, respectful of my time and Home. You really need to make sure that you have these folks give you a free estimate if you are considering any kind of paint work. They are a full service remodeler with skilled craftsmen in every trade.",
        "date"         => "07/28/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Tamim M. in Sugar Land, TX",
        "Project"      => "Paint, Varnish or Stain Interior Surfaces",
        "Comment"      => "Daniel with CBB was very easy to work with, and very quick to respond to questions/updates/concerns. I've worked with other contractors that can be hard to get a hold of, but Daniel is always accessible and calls you back in a few minutes. The team he brought was very hard working, and did a great job; Daniel supervises the job well. Furthermore, what I like about Daniel is that he accommodated our schedule for the quote process, we both work, and he made the time on Saturday to come out take a look. Lastly, in terms of value, he charges a fair price for the work that he and his team do, which is always a plus. I will definitely use them for jobs in the future and would recommend him to my friends. He even gave us some suggestion for colors, which i appreciate.",
        "date"         => "06/28/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Russell L. in Houston, TX",
        "Project"      => "Paint or Stain Single Items",
        "Comment"      => "I was happy with the job and it was a good value for the money. But, I asked the supervisor if the crew could remove the furniture in the garage apartment (5 or 6 pieces) and carry it away. He said they would. Then when they were finishing up I mentioned it to the No. 2 supervisor. He said ok but he would have to come back and get it. I said fine. He never came back. When I called the company no one answered. I left a message requesting the status of the furniture removal and request to set up another estimate for another piece of property. Never heard back. Text message and emails sent on same. No response. That is why they did not get a better rating.",
        "date"         => "04/01/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Josy M. in Houston, TX",
        "Project"      => "Camera Locate Breakage for a Plumbing System",
        "Comment"      => "timely friendly efficient professional,they did an excellent job,thank you",
        "date"         => "02/26/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Christine C. in Pearland, TX",
        "Project"      => "Paint or Stain Single Items",
        "Comment"      => "I was very appreciative that they came earlier than originally scheduled. I also got great pointers on what types of paints and primers to use.",
        "date"         => "01/12/2018",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Gokce D. in Pearland, TX",
        "Project"      => "Reface Already Installed Cabinets",
        "Comment"      => "Our kitchen and bathroon cabinets are painted to off-white. they're very friendly. They did an awesome job in a very short period. They worked very clean and professionally. i appreciated their work very much and to note: The price is less than the market average.",
        "date"         => "12/22/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Lili L. in Missouri City, TX",
        "Project"      => "Repair Exterior Trim",
        "Comment"      => "we had damage from bees in the eaves that required removal of all the wood, replacement of the wood and painting. CBB Brothers completed the repairs on time and on budget.",
        "date"         => "08/05/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Buster I. in Stafford, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "They gave me a good quote, but then they went above and beyond the quote. Jose is a gem and not only was the quality of his work top notch, but he delivered more than was asked him. They showed up on time and provided a good outline for the work they wanted to accomplish each day. At the end of each day, they cleaned up any mess they had made. I am very pleased with the final result. These guys will be on the top of my bid list from now on.",
        "date"         => "06/14/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Myles M. in Katy, TX",
        "Project"      => "Paint or Stain Single Items",
        "Comment"      => "Showed up on time everyday and finished ahead of schedule. Will certainly use them for all my future painting projects.",
        "date"         => "06/12/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Ashley B. in Katy, TX",
        "Project"      => "Paint, Varnish or Stain Interior Surfaces",
        "Comment"      => "CBB Brothers painted the entire interior of a home I was preparing to sell. He refinished the front door and even power washed the exterior. It was such a good job that the listing agent asked for the painters name. I will definitely use this group again. Daniel, the owner, did everything he said he would do, when he said he would do it and communicated every step of the way. Exceptional service!",
        "date"         => "05/27/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Shawna L. in Pearland, TX",
        "Project"      => "Paint Cabinets",
        "Comment"      => "CBB Brothers painted the entire interior of our home - walls, ceilings, closets, and kitchen cabinets. 3600 sq ft. CBB Brothers was in our home for 18 days. Daniel was fantastic at communicating with us the timetable and what rooms were next. He visited almost daily. The crew was very professional and considerate of being in our home. Given the large nature of the project, we were impressed at the quality of the work. The kitchen cabinets were sprayed. We used two paint colors. Their attention to detail was excellent. They ensured the cabinets were hung correctly when finished. I think a couple are better than when they were hired! When it was time for the final walk through, there were only minor touch ups to be done. We would not hesitate to call CBB Brothers again. We highly recommend them!",
        "date"         => "05/04/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Alice V. in Houston, TX",
        "Project"      => "Install Drywall",
        "Comment"      => "Quality work, crew is polite and they work hard. The owner Daniel visited almost on a daily basis and is very professional and easy to work with. Hired them initially to drywall a study, but ended up letting them do a bathroom remodel and other reno jobs as well. Highly recommend them.",
        "date"         => "05/02/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Jim T. in Houston, TX",
        "Project"      => "Paint, Varnish or Stain Interior Surfaces",
        "Comment"      => "I had 3 well-rated/recommended companies (2 HA, 1 other) bid the job. CBB had the best price, most-detailed/professional quote, best warranty and flexibility on paint used, so I selected them. Daniel knew his paint and reviewed/managed progress onsite daily. Workers did quality work and were kind/considerate. Can't recommend CBB strongly enough.",
        "date"         => "05/01/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Bruce S. in Houston, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "Good company too work with",
        "date"         => "04/14/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by a Homeowner in Houston, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "Very prompt service and the cost was much less than originally estimated. They were honest that not as much work actually needed to be done as I originally thought. I booked the service and it was completed within a day. I was very pleased with the professional level of service, quality and rate.",
        "date"         => "04/11/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Review by Justin R. in Houston, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "Daniel communicated the details of the job perfectly and his crew was always punctual. I had them repair several areas of drywall in my condo and paint two rooms. There was a storm event on the 2nd day of scheduled work and they lost 3 hours of productivity, but still finished on time. I highly recommend CBB Brothers.",
        "date"         => "01/20/2017",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "A Homeowner in Sugar Land, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "Excellent job. They were friendly and performed the job in a timely manner.",
        "date"         => "12/14/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Cora M. in Richmond, TX",
        "Project"      => "Paint, Varnish or Stain Interior Surfaces",
        "Comment"      => "Arrived on time, very professional, very happy with the results material and labor included in price",
        "date"         => "12/05/2016",
        "stars"        => 4,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Richard P. in Fresno, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "This was my 1st time dealing with this company. Did a great job with my drywall issues and the paint. They did a good job on some other things I had done, and the price was fair.",
        "date"         => "09/06/2016",
        "stars"        => 4,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Elzie T. in Missouri City, TX",
        "Project"      => "Paint or Stain Exterior Surfaces",
        "Comment"      => "A very good company with integrity.. I recommended them to a friend and he hired them.",
        "date"         => "08/31/2016",
        "stars"        => 4,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Allison J. in Katy, TX",
        "Project"      => "Paint or Stain Interior Surfaces",
        "Comment"      => "They were very professional and did a great job.",
        "date"         => "08/30/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Elena C.",
        "Project"      => "Paint or Stain Interior Surfaces",
        "Comment"      => "I really liked their bid! It was very detailed. It was the best I've ever received.",
        "date"         => "08/26/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Dionne R. in Richmond, TX",
        "Project"      => "Paint, Varnish or Stain Interior Surfaces",
        "Comment"      => "This company is professional and they did a great job on the painting needed for my house. Definitely will use them for future projects!",
        "date"         => "08/05/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Steven G. in Missouri City, TX",
        "Project"      => "Paint or Stain Interior Surfaces",
        "Comment"      => "Professional, Prompt and Meticulous, I would not hesitate to hire CBB Brothers again. In fact, I have already hired them for my next project. You will not be disappointed. They're awesome. Our home is so beautiful now, thanks to CBB Brothers.",
        "date"         => "07/27/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Sean M. in Sugar Land, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "Good work at reasonable cost. They did multiple things at my home. They re-patched an area where I removed existing fluorescent lights in the kitchen. They fixed a hole I had in my ceiling, re-textured a living room wall and fixed an area that had leaked around my fireplace. All areas were painted and textured to match. I would recommend Daniel and his crew.",
        "date"         => "07/08/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Hari P. in Sugar Land, TX",
        "Project"      => "Paint, Varnish or Stain Interior Surfaces",
        "Comment"      => "Excellent and faster on-time service",
        "date"         => "05/20/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "A Homeowner in Richmond, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "Good work at reasonable cost. Provided options for work and prices. Would recommend.",
        "date"         => "05/01/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Kyle R. in Houston, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "They were very thorough and understood that I was working with a budget. There was an additional leak and helped with a plumber as well.",
        "date"         => "04/01/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Mark C. in Sugar Land, TX",
        "Project"      => "Paint or Stain Exterior Surfaces",
        "Comment"      => "Great group of people.",
        "date"         => "04/01/2016",
        "stars"        => 4,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Carah P. in Sugar Land, TX",
        "Project"      => "Paint or Stain Exterior Surfaces",
        "Comment"      => "Quick response to my request. Did what they said they would, which is most important to me. Arrived clean, and left clean. Cleaned up after themselves.",
        "date"         => "03/22/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Callie W. in Bellaire, TX",
        "Project"      => "Refinish Already Installed Cabinets",
        "Comment"      => "Very professional! I plan on using CBB for more projects in the future.",
        "date"         => "02/27/2016",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Shandy M. in Richmond, TX",
        "Project"      => "Paint, Varnish or Stain Interior Surfaces",
        "Comment"      => "Professional, prompt, and price competitive! I am very pleased with the paint job done in my new home. I wanted worked done with a quick turnaround so that the painting was done prior to moving the furniture in and they were accommodating. The staff was friendly and trustworthy while in the home and they were on time during both days of the job. I had several ideas and they were open to what would please me as a customer, but also shared their ideas/expertise. I used my own internet search and also Home Advisors and pulled several different estimates before deciding to go with CBB Brothers. They had the best price quote and I read several reviews ahead of time...all accurate! Definitely recommend them. Daniel and Francisco along with another colleague of theirs, definitely met my expectations.",
        "date"         => "12/29/2015",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Yvonne W. in Richmond, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "Very good worker, quick, on time",
        "date"         => "11/15/2015",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "Joan N. in Houston, TX",
        "Project"      => "Paint or Stain Exterior Surfaces",
        "Comment"      => "I am very pleased with the work that CBB Brothers did for me. They were on time, courteous, and even did extra little jobs that I had to have done. They painted my house beautifully and cleaned up after the work. I would certainly hire them again, and I intend to. Daniel was very helpful and was able to answer all of my questions.",
        "date"         => "09/19/2015",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    array(
        "Review"       => "A Homeowner in Sugar Land, TX",
        "Project"      => "Repair Drywall",
        "Comment"      => "The workmanship was excellent as well as their customer service. However, the crew arrived 45 minutes late. They also failed to cover my grandmother clock before painting. Fortunately I was able to clean off the paint splatter without any damage. But, I would definitely re-hire them if needed in the future.",
        "date"         => "09/10/2015",
        "stars"        => 3,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ),
    //FACEBOOK
    array(
        "Review"       => "Matthew Cowan",
        "Project"      => "-",
        "Comment"      => "Great value and professional craftsmanship. was very communicative throughout the process.",
        "date"         => "09/18/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'facebook',
    ),
    array(
        "Review"       => "Rupa Swy",
        "Project"      => "-",
        "Comment"      => "My husband hired Daniel for paint and tile job. Customer satisfaction is the priority for Daniel and Ramon. They did a fantastic job. We highly recommend them !!!",
        "date"         => "07/19/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'facebook',
    ),
    array(
        "Review"       => "Beulah Telman",
        "Project"      => "-",
        "Comment"      => "We had CBB Brothers repair our garage ceiling from water damage. They did such a nice job fixing it you can't tell where the large holes were. They were able to get to the job quickly and finish in 2 days. Daniel checked in several times to make sure everything was going as planned and to answer any questions.<br>The crew was very neat and polite. They took great care to protect our other things in the garage and even cleaned up at night before leaving.<br>We are so glad we found this general contractor. We definitely will recommend them to others and will call them when any other jobs. CBB Brothers is now on my list of contacts!",
        "date"         => "05/02/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'facebook',
    ),
    array(
        "Review"       => "Stan Ingram",
        "Project"      => "-",
        "Comment"      => "CBB Brothers repainted our home, installed new exterior lights, and a new front door. The managers, Daniel and Ramón, and the entire crew were so professional, kind, and thorough. The pricing was transparent and reasonable. They did such a great job that both of my neighbors hired CBB Brothers to remodel and repaint their homes. We definitely recommend CBB Brothers, and we will use them again!",
        "date"         => "06/15/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'facebook',
    ),
    array(
        "Review"       => "De Jiles",
        "Project"      => "-",
        "Comment"      => "CBB brothers did the move out touch up on my house. They painted the outside of my house and most of the inside my house. I had it all jacked up because I attempted to do it myself. � They are very professional, efficient and very clean. They beat all the other three bids I had with an excellent price. Daniel checked by serval times to make sure his crew was doing the job correctly and I was satisfied with the work. I am now looking for CBB to do the renovation on my business and will continue going to them for all my construction needs rather guessing if the company will do the job right.",
        "date"         => "07/28/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'facebook',
    ),
    //GOOGLE
    array(
        "Review"       => "Bill Tatar",
        "Project"      => "-",
        "Comment"      => "Hired them to repair some siding on the house. They were so easy to talk with, communication all along the project was fast and professional. The job looks great. Finding a good contractor can be a challenge. CBB has been now added to my contacts!",
        "date"         => "07/01/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'google',
    ),
    array(
        "Review"       => "LP",
        "Project"      => "-",
        "Comment"      => "I write this letter of endorsement for CBB BROTHERS CONSTRUCTION COMPANY for the superior quality and detailed work produced and completed on my projects.",
        "date"         => "03/01/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'google',
    ),
    array(
        "Review"       => "Stanton Ingram",
        "Project"      => "-",
        "Comment"      => "CBB Brothers repainted our home, installed new exterior lights, and a new front door. The managers, Daniel and Ramón, and the entire crew were so professional, kind, and thorough. The pricing was transparent and reasonable.",
        "date"         => "07/01/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'google',
    ),
    array(
        "Review"       => "Abi Godfrey",
        "Project"      => "-",
        "Comment"      => "This is the second time we have used them. They respond quickly to our request and provide clear estimates. Their work is great. We had them repaint bathroom cabinets and fix some older water damage under the sinks - it looked good as new.",
        "date"         => "07/01/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'google',
    ),
    array(
        "Review"       => "Sri P.",
        "Project"      => "-",
        "Comment"      => "My husband hired Daniel for paint and tile job. Customer satisfaction is the priority for Daniel and Ramon. They did a fantastic job. We highly recommend them !!!",
        "date"         => "08/01/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'google',
    ),
    array(
        "Review"       => "Matthew Cowan",
        "Project"      => "-",
        "Comment"      => "Great value and professional workmanship. Always was kept informed and give great advice.",
        "date"         => "09/01/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'google',
    ),
    array(
        "Review"       => "Laura Cowan",
        "Project"      => "-",
        "Comment"      => "Had a very good experience with this construction company and was very pleased with there work, attitude and willingness to accomodate.",
        "date"         => "09/01/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'google',
    ),
    array(
        "Review"       => "Richard Mansfield",
        "Project"      => "-",
        "Comment"      => "I bought a new home and wanted the kitchen updated and new paint throughout the house. I did my homework reading countless reviews on remodeling companies and interviewed 5 different companies before deciding on CBB.",
        "date"         => "02/01/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'google',
    ),
    array(
        "Review"       => "Waist Train",
        "Project"      => "-",
        "Comment"      => "They did excellent job ! The owner itself always making sure customer will satisfied to their job! Another best thing for them they finished their job on time, price reasonable! I can definitely recommend this company !",
        "date"         => "01/01/2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'google',
    ),
);
?>