let previous = document.querySelector('#pre');
let play = document.querySelector('#play');
let next = document.querySelector('#next');
let title = document.querySelector('#title');
let recent_volume= document.querySelector('#volume');
let volume_show = document.querySelector('#volume_show');
let slider = document.querySelector('#duration_slider');
let show_duration = document.querySelector('#show_duration');
let track_image = document.querySelector('#track_image');
let auto_play = document.querySelector('#auto');
let present = document.querySelector('#present');
let total = document.querySelector('#total');
let artist = document.querySelector('#artist');

let timer;
let autoplay = 0;

let index_no = 0;
let Playing_song = false;

//create a audio Element
let track = document.createElement('audio');


//All songs list
let All_song = [
   {
     name: "Aasan Nahin Yahan _ Aashiqui 2(MP3_160K)",
     path: "audio/Aasan Nahin Yahan Lyrics _ Aashiqui 2(MP3_160K).mp3",
     img: "images/aasan_nahi.jpg",
     singer: "ARIJIT SINGH"
   },
   {
     name: "Kalank Title Track ",
     path: "audio/Kalank Title Track - Lyrical _ Alia Bhatt , Varun Dhawan _ Arijit Singh _ Pritam_ Amitabh ( 128kbps ).mp3",
     img: "images/kalank.jpg",
     singer: "Arijit Singh _ Pritam_ Amitabh"
   },
   {
     name: "Rait Zara Si (Lyrical)",
     path: "audio/Rait Zara Si (Lyrical) _ Atrangi Re _ @A. R. Rahman_Akshay, Dhanush,Sara,Arijit, Shashaa, Bhushan K ( 128kbps ).mp3",
     img: "images/rait_zara_si_hai.jpg",
     singer: "A. R. Rahman_Akshay, Dhanush,Sara,Arijit, Shashaa, Bhushan K"
   },
   {
     name: "Saware (Slowed Reverb) - Arijit Singh",
     path: "audio/Saware (Slowed Reverb) - Arijit Singh _(MP3_160K).mp3",
     img: "images/saaware.jpg",
     singer: "Arijit Singh"
   },
   {
     name: "Shayad - Chaahat Kasam Nahi Hai",
     path: "audio/Shayad - Chaahat Kasam Nahi Hai _ Pritam _ Arijit Singh(MP3_160K).mp3",
     img: "images/shayad.jpg",
     singer: "Pritam _ Arijit Singh"
   },
   {
     name: "Tu Kisi Rail Si _ Masaan _ ",
     path: "audio/Tu Kisi Rail Si _ Masaan _ Vicky Kaushal _ Shweta Tripathi _ Swanand Kirkire _ Indian Ocean _Lyrical(MP3_160K).mp3",
     img: "images/masaan.jpg",
     singer: "Pritam _ Arijit Singh"
   },
   {
     name: "Tere Hawaale ",
     path: "audio/Tere Hawaale (Full Video) Laal Singh Chaddha _ Aamir_Kareena _ Arijit_Shilpa _ Pritam_Amitabh_Advait(MP3_160K).mp3",
     img: "images/tere_hawale.jpg",
     singer: "Arijit_Shilpa _ Pritam_Amitabh_Advait"
   },
   {
     name: "Hasi Full Video - Hamari Adhuri Kahani_",
     path: "audio/Hasi Full Video - Hamari Adhuri Kahani_Emraan Hashmi_ Vidya Balan_Ami Mishra_Mohit Suri(M4A_128K).m4a",
     img: "images/hasi.jpg",
     singer: "Ami Mishra_Mohit Suri"
   },
   {
     name: "Kaakan Official Video _ Kaakan _ ",
     path: "audio/Kaakan Official Video _ Kaakan _ Jitendra Joshi _ Urmila Kothare _ Shankar Mahadevan(MP3_160K).mp3",
     img: "images/kakan.jpg",
     singer: "Jitendra Joshi _ Urmila Kothare _ Shankar Mahadevan"
   },
   {
     name: "Main Pal Do Pal Ka Shayar Hoon _ Amitabh Bachchan_s Poetry Recital  _ Kabhi Kabhie ",
     path: "audio/Main Pal Do Pal Ka Shayar Hoon _ Amitabh Bachchan_s Poetry Recital  _ Kabhi Kabhie [1976](MP3_320K).mp3",
     img: "images/main_pal.jpg",
     singer: "Amitabh Bachchan_s Poetry Recital  _ Kabhi Kabhie "
   },
   {
     name: "Ed Sheeran - Perfect (Official Music Video)(MP3_160K) ",
     path: "audio/Ed Sheeran - Perfect (Official Music Video)(MP3_160K).mp3",
     img: "images/perfect.jpg",
     singer: "Ed Sheeran "
   }
   ,
   {
     name: "Passenger - Let Her Go (Feat. Ed Sheeran - Anniversary Edition)  ",
     path: "audio/Passenger - Let Her Go (Feat. Ed Sheeran - Anniversary Edition) [Official Video](MP3_160K).mp3",
     img: "images/let_her_go.jpg",
     singer: "Ed Sheeran "
   }

];


// All functions


// function load the track
function load_track(index_no){
	clearInterval(timer);
	reset_slider();

	track.src = All_song[index_no].path;
	title.innerHTML = All_song[index_no].name;	
	track_image.src = All_song[index_no].img;
    artist.innerHTML = All_song[index_no].singer;
    track.load();

	timer = setInterval(range_slider ,1000);
	total.innerHTML = All_song.length;
	present.innerHTML = index_no + 1;
}

load_track(index_no);


//mute sound function
function mute_sound(){
	track.volume = 0;
	volume.value = 0;
	volume_show.innerHTML = 0;
}


// checking.. the song is playing or not
 function justplay(){
 	if(Playing_song==false){
 		playsong();

 	}else{
 		pausesong();
 	}
 }


// reset song slider
 function reset_slider(){
 	slider.value = 0;
 }

// play song
function playsong(){
  track.play();
  Playing_song = true;
  play.innerHTML = '<i class="fa fa-pause" aria-hidden="true"></i>';
}

//pause song
function pausesong(){
	track.pause();
	Playing_song = false;
	play.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
}


// next song
function next_song(){
	if(index_no < All_song.length - 1){
		index_no += 1;
		load_track(index_no);
		playsong();
	}else{
		index_no = 0;
		load_track(index_no);
		playsong();

	}
}


// previous song
function previous_song(){
	if(index_no > 0){
		index_no -= 1;
		load_track(index_no);
		playsong();

	}else{
		index_no = All_song.length;
		load_track(index_no);
		playsong();
	}
}


// change volume
function volume_change(){
	volume_show.innerHTML = recent_volume.value;
	track.volume = recent_volume.value / 100;
}

// change slider position 
function change_duration(){
	slider_position = track.duration * (slider.value / 100);
	track.currentTime = slider_position;
}

// autoplay function
function autoplay_switch(){
	if (autoplay==1){
       autoplay = 0;
       auto_play.style.background = "rgba(255,255,255,0.2)";
	}else{
       autoplay = 1;
       auto_play.style.background = "#148F77";
	}
}


function range_slider(){
	let position = 0;
        
        // update slider position
		if(!isNaN(track.duration)){
		   position = track.currentTime * (100 / track.duration);
		   slider.value =  position;
	      }

       
       // function will run when the song is over
       if(track.ended){
       	 play.innerHTML = '<i class="fa fa-play" aria-hidden="true"></i>';
           if(autoplay==1){
		       index_no += 1;
		       load_track(index_no);
		       playsong();
           }
	    }
     }