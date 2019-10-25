<?xml version="1.0" encoding="UTF-8"?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-gb">
<link rel="self" type="application/atom+xml" href="https://forums.nesdev.com/feed.php" />

<title>nesdev.com</title>
<subtitle>NES Development and Strangulation Records message boards</subtitle>
<link href="https://forums.nesdev.com/index.php" />
<updated>2019-05-25T22:04:23-07:00</updated>

<author><name><![CDATA[nesdev.com]]></name></author>
<id>https://forums.nesdev.com/feed.php</id>
<entry>
<author><name><![CDATA[Gilbert]]></name></author>
<updated>2019-05-25T22:04:23-07:00</updated>
<published>2019-05-25T22:04:23-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239282#p239282</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239282#p239282"/>
<title type="html"><![CDATA[Other Retro Dev • Re: Were 3bpp graphics ever actually a thing?]]></title>

<category term="Other Retro Dev" scheme="https://forums.nesdev.com/viewforum.php?f=23" label="Other Retro Dev"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239282#p239282"><![CDATA[
As far as I know, the original PC-8801 uses 3-bit(<a href="http://www.highriskrevolution.com/wp/gamelife/2011/01/08/%e3%83%91%e3%82%bd%e3%82%b3%e3%83%b3%e9%bb%8e%e6%98%8e%e6%9c%9f%e3%83%bb%e4%b8%ad%e9%96%93%e8%89%b2%e3%83%9a%e3%82%a4%e3%83%b3%e3%83%88%e7%99%ba%e8%a6%8b%e7%89%a9%e8%aa%9e/" class="postlink">fixed RGB 111 palette</a>).<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=4653">Gilbert</a> — Sat May 25, 2019 10:04 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tokumaru]]></name></author>
<updated>2019-05-25T22:02:10-07:00</updated>
<published>2019-05-25T22:02:10-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18311&amp;p=239281#p239281</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18311&amp;p=239281#p239281"/>
<title type="html"><![CDATA[General Stuff • Re: Cashless society disadvantages]]></title>

<category term="General Stuff" scheme="https://forums.nesdev.com/viewforum.php?f=5" label="General Stuff"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18311&amp;p=239281#p239281"><![CDATA[
In the era of the internet there are a lot of jobs you can do without the need to relocate.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=95">tokumaru</a> — Sat May 25, 2019 10:02 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tokumaru]]></name></author>
<updated>2019-05-25T22:00:01-07:00</updated>
<published>2019-05-25T22:00:01-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18890&amp;p=239280#p239280</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18890&amp;p=239280#p239280"/>
<title type="html"><![CDATA[General Stuff • Re: What's the deal with missing content in Game Boy games?]]></title>

<category term="General Stuff" scheme="https://forums.nesdev.com/viewforum.php?f=5" label="General Stuff"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18890&amp;p=239280#p239280"><![CDATA[
<div class="quotetitle">tepples wrote:</div><div class="quotecontent"><br />That and drawing software sprites onto the background is slow.<br /></div><br />Heh, I seem to be having a problem with choosing the appropriate words these days, because this is actually what I was trying to say. I didn't mean that the artist would take longer to draw, I meant that the program would take longer to write the graphics to the background tiles.<br /><br />I think that the Mortal Kombat games on the Master System did that as well, and that left very few tiles available for the actual background, so the arenas ended up looking pretty bland.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=95">tokumaru</a> — Sat May 25, 2019 10:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tokumaru]]></name></author>
<updated>2019-05-25T21:51:22-07:00</updated>
<published>2019-05-25T21:51:22-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18892&amp;p=239279#p239279</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18892&amp;p=239279#p239279"/>
<title type="html"><![CDATA[Newbie Help Center • Re: How do I make animations work?]]></title>

<category term="Newbie Help Center" scheme="https://forums.nesdev.com/viewforum.php?f=10" label="Newbie Help Center"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18892&amp;p=239279#p239279"><![CDATA[
One common mistake people make when first programming games or animations is adding a global delay to control timing... As you realized, that doesn't work because it delays *everything*, while what you want is to control the pace of each aspect of the game independently.<br /><br />Unlike the typical programming tasks they teach in college/courses, that work linearly by receiving input and processing that input to generate an output, a game is a continuous thing with several things happening at the same time. You can't have your CPU busy taking care of one single task until that task is done, because nothing else in the game will do anything while the CPU is busy with that one task.<br /><br />The trick is to stop thinking linearly, and start thinking in steps. Games work in steps. Each frame is a step, so every frame, everything in your game must advance exactly one step. If every frame everything takes one step, the player will have the impression that everything is animating in parallel.<br /><br />What constitutes a step depends on the object/aspect which is being updated. In the case of animations, you can't advance every frame because that'd be too fast, so one step needs to be less than a frame. In modern computers you could use fractional numbers to define a slower frame rate, but on 8-bit platforms fractions aren't as straightforward. One simple solution is to do what <br />dougeff said, and give everything that needs a delay its own counter. Every frame you update the counter by one, and once the counter is up, you reset it and advance one step.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=95">tokumaru</a> — Sat May 25, 2019 9:51 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[noyen1973]]></name></author>
<updated>2019-05-25T21:05:34-07:00</updated>
<published>2019-05-25T21:05:34-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18889&amp;p=239278#p239278</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18889&amp;p=239278#p239278"/>
<title type="html"><![CDATA[SNESdev • Re: X816 Assembler &gt; YMAS 0.0180c]]></title>

<category term="SNESdev" scheme="https://forums.nesdev.com/viewforum.php?f=12" label="SNESdev"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18889&amp;p=239278#p239278"><![CDATA[
Check the file attributes for your bin files, they might be set as read-only.  I don't know why that should matter in Free Pascal as the file is only opened for reading and not writing.  I've fixed the problem in my current version.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=9466">noyen1973</a> — Sat May 25, 2019 9:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[rainwarrior]]></name></author>
<updated>2019-05-25T20:50:22-07:00</updated>
<published>2019-05-25T20:50:22-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239277#p239277</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239277#p239277"/>
<title type="html"><![CDATA[Other Retro Dev • Re: Were 3bpp graphics ever actually a thing?]]></title>

<category term="Other Retro Dev" scheme="https://forums.nesdev.com/viewforum.php?f=23" label="Other Retro Dev"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239277#p239277"><![CDATA[
On a system like Atari ST or Amiga where graphics were in a very planar format, it becomes reasonable to have arbitrary numbers of planes.<br /><br />I can't think of any common 3-bit graphics mode, but there was a very standard 5-bit mode on the Amiga.<br /><br />However, on both of those systems, I believe you probably could find examples of source/software data organized into 3-bpp for convenience. Sprite data that only needs 8 colours, despite the screen having 16 or 32 total, etc.<br /><br />Similarly in YY-CHR and some graphics documents for the SNES you might find descriptions of 3-bpp graphics data as well, which despite not having an actual hardware function might have been convenient for storing data that doesn't need that extra bit.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=5165">rainwarrior</a> — Sat May 25, 2019 8:50 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tepples]]></name></author>
<updated>2019-05-25T20:05:14-07:00</updated>
<published>2019-05-25T20:05:14-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239276#p239276</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239276#p239276"/>
<title type="html"><![CDATA[Other Retro Dev • Re: Were 3bpp graphics ever actually a thing?]]></title>

<category term="Other Retro Dev" scheme="https://forums.nesdev.com/viewforum.php?f=23" label="Other Retro Dev"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239276#p239276"><![CDATA[
Most of the frame buffer of <em>Missile Command</em> is 2bpp, but the bottom few rows are 3bpp.<br /><br />I remember reading an article within the past year or so about reverse engineering some arcade game with two 3bpp background planes. All I can remember is it had a pyramid in the background, and the title screen had to be split between the background and sprites because they were running out of space in the background side of the pattern table.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=9">tepples</a> — Sat May 25, 2019 8:05 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[dougeff]]></name></author>
<updated>2019-05-25T19:56:53-07:00</updated>
<published>2019-05-25T19:56:53-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18892&amp;p=239275#p239275</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18892&amp;p=239275#p239275"/>
<title type="html"><![CDATA[Newbie Help Center • Re: How do I make animations work?]]></title>

<category term="Newbie Help Center" scheme="https://forums.nesdev.com/viewforum.php?f=10" label="Newbie Help Center"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18892&amp;p=239275#p239275"><![CDATA[
You're going to want a variable &quot;hero_walk_count&quot; that counts up as you walk (maybe on pad R and pad L).<br /><br />I can't remember how many frames you want each step of the animation... let's say 10.<br /><br />So when hero_walk_count goes &gt;= 10, reset it to 0, and increase the hero_walk_frame. If that is over the max, reset that to zero too.<br /><br />Lots of options next...<br />have either an if, else if, else if, else checking each hero_walk_frame... or a switch/case... or an array of const pointers to all the animations using hero_walk_frame as the index. pass that pointer to the oam_meta_spr() function.<br /><br />so, the if else version would be like...<br />if (hero_walk_frame == 0)<br />frame_ptr = RoundWLK1;<br />else if (hero_walk_frame == 1)<br />frame_ptr = RoundWLK2;<br />else frame_ptr = RoundWLK3;<br /><br />oam_meta_spr(...frame_ptr instead of the sprite array)<br /><br />*edit, removed &amp;<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=7008">dougeff</a> — Sat May 25, 2019 7:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tepples]]></name></author>
<updated>2019-05-25T19:48:33-07:00</updated>
<published>2019-05-25T19:48:33-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18311&amp;p=239274#p239274</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18311&amp;p=239274#p239274"/>
<title type="html"><![CDATA[General Stuff • Re: Cashless society disadvantages]]></title>

<category term="General Stuff" scheme="https://forums.nesdev.com/viewforum.php?f=5" label="General Stuff"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18311&amp;p=239274#p239274"><![CDATA[
<div class="quotetitle">Bregalad wrote:</div><div class="quotecontent"><br />Well, even if you could play a game with positive return (something I'm extremely dubious/suspectful of)<br /></div><br />Blackjack for people who count cards.<br /><br /><div class="quotetitle">Bregalad wrote:</div><div class="quotecontent"><br />it only makes sense if the ratio between income per hour and effort you have to make is higher than working.<br /></div><br />The effort of working includes the effort of finding a job and relocating to where the job is. I had trouble with that for a long time.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=9">tepples</a> — Sat May 25, 2019 7:48 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Taluigi]]></name></author>
<updated>2019-05-25T19:30:05-07:00</updated>
<published>2019-05-25T19:30:05-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18892&amp;p=239273#p239273</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18892&amp;p=239273#p239273"/>
<title type="html"><![CDATA[Newbie Help Center • How do I make animations work?]]></title>

<category term="Newbie Help Center" scheme="https://forums.nesdev.com/viewforum.php?f=10" label="Newbie Help Center"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18892&amp;p=239273#p239273"><![CDATA[
Sorry if this ends up a little bit confusing, but I have issue with my project.<br />Before I start, I just wanna tell you that:<br />- Yes, I'm using c65, and also I'm using NESDOUG's lib (props to him btw)<br /><br />I want to make a simple animation of a character walking, don't worry, you don't have to explain to me what metapsprites are because I understand how this works, the main problem is, I want to make every single frame to play instead of static, or three frames at the same time playing<br /><br />(I already have the sprites set in sprites.h, so there are no problems)<br /><br /><div class="codetitle"><b>Code:</b></div><div class="codecontent">sprid = oam_meta_spr(temp_x, high_byte(Char1.y), sprid, RoundWLK1);<br />sprid = oam_meta_spr(temp_x, high_byte(Char.1y), sprid, RoundWLK2);<br />sprid = oam_meta_spr(temp_x, high_byte(Char1.y), sprid, RoundWLK3);</div><br /><br />When I executed that code, three frames appeared at THE SAME time! So, I tried usng the delay(); command, but that made the gameplay lag alot and also it didn't fixed the issue.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=14698">Taluigi</a> — Sat May 25, 2019 7:30 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tepples]]></name></author>
<updated>2019-05-25T19:00:56-07:00</updated>
<published>2019-05-25T19:00:56-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18890&amp;p=239272#p239272</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18890&amp;p=239272#p239272"/>
<title type="html"><![CDATA[General Stuff • Re: What's the deal with missing content in Game Boy games?]]></title>

<category term="General Stuff" scheme="https://forums.nesdev.com/viewforum.php?f=5" label="General Stuff"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18890&amp;p=239272#p239272"><![CDATA[
That and drawing software sprites onto the background is slow. The closest comparison would be the ZX Spectrum, which uses a 1bpp frame buffer and an 8080 family CPU at a similar clock rate. You didn't get a lot of 60 fps on that platform.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=9">tepples</a> — Sat May 25, 2019 7:00 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[LoneKiltedNinja]]></name></author>
<updated>2019-05-25T17:56:04-07:00</updated>
<published>2019-05-25T17:56:04-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=3580&amp;p=239271#p239271</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=3580&amp;p=239271#p239271"/>
<title type="html"><![CDATA[NESdev • Re: Updating APU Regs Multiple Times Per Frame]]></title>

<category term="NESdev" scheme="https://forums.nesdev.com/viewforum.php?f=2" label="NESdev"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=3580&amp;p=239271#p239271"><![CDATA[
A very-much-necro post here because this thread is high on Google and I am currently doing more or less exactly what the OP is asking (with the original aim of a sound engine for EXCLUSIVELY music-demo use; no need to count precisely mid-frame or leave time for game code).<br /><br /><strong>Tl;dr: <em>*death-metal dial-up modem noises*</em></strong><br /><br />Using a fairly simple testbed that gives every register of every channel a looping queue of up to 8 values held, sub-frame, for literally a number of main-loop iterations rather than anything e.g. NMI-clocked, <br />- 1 &quot;tick&quot; is basically every 16th iteration of the main program loop, as its ongoing register index hits a given value<br />- anything less than about 64 &quot;ticks&quot; between updates on the square or triangle channels sounds like... death. (although since Triangle doesn't reset its step clock on register updates, you can achieve some really funky largely-uncontrolled modulation artifacts...)<br />- 64 &quot;ticks&quot; between register updates produces an end result acoustically close-enough to 1 update per frame at NMI-59.9Hz<br />-- I'm counting some 0x380 iterations of the loop per frame, so each of the 16 registers should be clocking through at about 0x38 (decimal 56) &quot;ticks&quot; per frame<br />-- indeed, the same Final Fantasy VI 6-tone block chord I'm testing with now was part of a frame-timed arpeggiation demo I did years ago, and I can definitely hear the top note of that arpeggio going by at about the same speed as the frame-clocked demo when holding for 64 ticks of the loop-clocked demo, barely-maybe going by at all when holding for 32 ticks of the loop-clocked demo, and getting utterly lost in the noise with any shorter wait times.<br /><br />Results are consistent between Nestopia and a PowerPak in a vintage toploader.<br /><br />Best guesses so far:<br />- the pAPU internally uses perhaps the Frame Counter to only &quot;latch&quot; values from the control registers on a 60Hz-or-so interval, so if you are literally writing mid-latch you get undefined garbage, otherwise you get whatever is stable once per frame or so.<br />AND/OR<br />- it takes CPU-clock-nontrivial time for the pAPU to adjust the line levels after noticing a register change, and interrupting this process leaves the frequency generators in very unhappy middle-ground states<br /><br />Either way, I am disappoint.<br />I'll probably keep banging on it a bit more this weekend, but I suspect that the closest thing possible to CPU-driven mixing/multiplexing on NES is going to be on-the-fly DMC sample building, which is outside my current scope of experimentation.<br /><br /><strong>Update:</strong><br />Values closer to a clean factor of the de-facto number of ticks per frame do seem to work better.<br />I can push the Triangle and Square down to 42-tick holds (3/4 frame) with good results when I'm getting ~56 ticks/frame.<br />28 is dicey, 14 I thought I had working markedly better than 16, exclusively on square, but then I listened more closely in headphones and 14 is still garbage.<br />And of course, changing the hold time changes the number of times per frame that the loop has to do more heavy lifting, which in turn changes the average loop iterations per frame, which then throws the math off.<br /><br />Using the same trick to try to mock-volume the triangle channel with a sub-frame-timed on/off duty cycle also does something passable (definitely not perceived as a drop in &quot;volume&quot; but at least a drop in sound intensity through the quite-obvious in/off pattern) at 42-tick holds.  Much lower and you're back into the wonderful world of frequency aliasing as you keep interrupting the continuous step-waveform at odd points.<br /><br />Experiments were generally intended to try to get on the NES what this guy has gotten out of hardware with only a single-channel square beep.  Sadly, it seems this won't happen. <!-- m --><a class="postlink" href="https://soundcloud.com/mister_beep">https://soundcloud.com/mister_beep</a><!-- m --><p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=3570">LoneKiltedNinja</a> — Sat May 25, 2019 5:56 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tokumaru]]></name></author>
<updated>2019-05-25T15:57:26-07:00</updated>
<published>2019-05-25T15:57:26-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239270#p239270</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239270#p239270"/>
<title type="html"><![CDATA[Other Retro Dev • Re: Were 3bpp graphics ever actually a thing?]]></title>

<category term="Other Retro Dev" scheme="https://forums.nesdev.com/viewforum.php?f=23" label="Other Retro Dev"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239270#p239270"><![CDATA[
I think they imposed a limit of 8 colors to the artists so the graphics could be encoded as 3bpp, saving some space. During decompression, a 4th bit would be added so they could be used by the video hardware normally. If I'm not mistaken, the most prominent example of this is Super Mario World on the SNES. I don't know if the game applied another layer of compression on top of that.<br /><br />EDIT: my first post was poorly worded. I meant that certain games for 4bpp platforms would encode their graphics in 3bpp to save space.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=95">tokumaru</a> — Sat May 25, 2019 3:57 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[Marscaleb]]></name></author>
<updated>2019-05-25T15:32:04-07:00</updated>
<published>2019-05-25T15:32:04-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239269#p239269</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239269#p239269"/>
<title type="html"><![CDATA[Other Retro Dev • Re: Were 3bpp graphics ever actually a thing?]]></title>

<category term="Other Retro Dev" scheme="https://forums.nesdev.com/viewforum.php?f=23" label="Other Retro Dev"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=18891&amp;p=239269#p239269"><![CDATA[
<div class="quotetitle">tokumaru wrote:</div><div class="quotecontent"><br />In hardware, I don't think so, but some 4bpp platforms used 3bpp graphics to save space.<br /></div><br />Like, as a legit way they were encoded and processed, or are we just talking about designing the graphics to use eight colors so that the other eight in the palette could be used by other tiles?<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=7200">Marscaleb</a> — Sat May 25, 2019 3:32 pm</p><hr />
]]></content>
</entry>
<entry>
<author><name><![CDATA[tokumaru]]></name></author>
<updated>2019-05-25T15:31:24-07:00</updated>
<published>2019-05-25T15:31:24-07:00</published>
<id>https://forums.nesdev.com/viewtopic.php?t=10696&amp;p=239268#p239268</id>
<link href="https://forums.nesdev.com/viewtopic.php?t=10696&amp;p=239268#p239268"/>
<title type="html"><![CDATA[SNESdev • Re: Bad Apple demo for SNES]]></title>

<category term="SNESdev" scheme="https://forums.nesdev.com/viewforum.php?f=12" label="SNESdev"/>
<content type="html" xml:base="https://forums.nesdev.com/viewtopic.php?t=10696&amp;p=239268#p239268"><![CDATA[
<div class="quotetitle">supercat wrote:</div><div class="quotecontent"><br />Have you tried porting that to the NES?  I'd say it looks pretty good.<br /></div><br />Nope, I just wrote a script in PHP to encode the tiles (don't know if I still have it) and made a GIF of the result.<br /><br />I though it looked cool too... the fluidity really compensated for the incorrect pixels, IMO. Making a demo should be trivial, all the work would be in selecting a compression scheme that worked well on the name table data. Just a little bit of forced blanking should be enough to guarantee a frame rate of 30.<p>Statistics: Posted by <a href="https://forums.nesdev.com/memberlist.php?mode=viewprofile&amp;u=95">tokumaru</a> — Sat May 25, 2019 3:31 pm</p><hr />
]]></content>
</entry>
</feed>