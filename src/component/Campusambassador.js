import React from "react";
import tw from "twin.macro";
// import { css } from "styled-components/macro"; //eslint-disable-line
import AnimationRevealPage from "./AnimationRevealPage.js";
import Hero from "./TwoColumnWithVideo.js"; 
// import Features from "components/features/ThreeColSimple.js";
import MainFeature from "./TwoColWithButton.js";
// import MainFeature2 from "components/features/TwoColSingleFeatureWithStats2.js";
// import TabGrid from "components/cards/TabCardGrid.js";
import Testimonial from "./ThreeColumnWithProfileImage.js";
// import DownloadApp from "components/cta/DownloadApp.js";
import Footer from "./FiveColumnWithInputForm.js";
import Signup from "./Signup.js";

import {
  BrowserRouter as Router,
  Switch,
  Route,
  Link
} from "react-router-dom";

import process from "../images/process.png";

// import chefIconImageSrc from "images/chef-icon.svg";
// import celebrationIconImageSrc from "images/celebration-icon.svg";
// import shopIconImageSrc from "images/shop-icon.svg";

export default () => {
  const Subheading = tw.span`tracking-wider text-sm font-medium`; 
  const HighlightedText = tw.span`bg-primary-500 text-gray-100 px-4 transform -skew-x-12 inline-block`;
  const HighlightedTextInverse = tw.span`bg-gray-100 text-primary-500 px-4 transform -skew-x-12 inline-block`;
  const Description = tw.span`inline-block mt-8`;
  const imageCss = tw`rounded-6xl `;
  return (
    <AnimationRevealPage>
    <Router>
   
      <Hero
        heading={<> SPADE <br/> Campus Ambassador </>}
        description={
          <Description>
            
          </Description>}
        imageSrc="https://amigoz.app/static/amigoz/images/college_ambassador/college_ambassador.svg"
        imageCss={imageCss}
        imageDecoratorBlob={false}
        primaryButtonText="Apply Now"
        watchVideoButtonText="Meet The Chefs"
      />
   
          <MainFeature
            
            heading={
          <>
            About Campus Ambassador Process
          </>
          
        }
        description={
          <Description>
          The Campus Ambassador Program at Spade Ems wants people of great interest, super 
          energetic, thrilled who can take the initiative and make it a successful voyage. The 
          members should be a part of college community, club, event, and activities. Moreover, 
          he/she has led an event in the past and active in college participation.
          Through this highly selective Program, you’ll gain work experience and get a chance 
          to earn also. Imagine how its going to be helpful for you in shaping your career and 
          become the next great leader.
          <br/>
          <br/>
          If you feel you have the qualities of becoming Spade Ems campus ambassador, join in 
          and be a part of family. We assure you of great work experience, learning, motivation
          and growth. 
          <br/>
          <br/>
          Hurry, Join in Now
        </Description>}
        
        buttonRounded={true}
        textOnLeft={false}
        primaryButtonText="Learn More"
        imageSrc={
          process
        }
        imageCss={imageCss}
        imageDecoratorBlob={false}

        imageDecoratorBlobCss={tw`left-1/2 -translate-x-1/2 md:w-32 md:h-32 opacity-25`}
      />
    
       <MainFeature

        
        heading={
          <>
            Responsibilities of a campus ambassador
          </>
        }
        description={
          <Description>
            <div className="responsibilty">
                 •  Promote our services in your college and try to target students  who are interested in web 
                 development, graphic designing,  marketing, etc.<br/><br/>
                 • Publicise by displaying posters on notice boards, sharing e-posters on WhatsApp, 
                 Facebook, etc., circulating emails, etc.<br/><br/>
                 •  Submit weekly reports.<br/><br/>
                 •  Conduct workshops, online events, etc.<br/><br/>
                 • Represent us in the placement cells of your college.<br/><br/>
                 • Associate Spade Ems with various college societies and fest department.<br/> <br/>
            </div>
            
            
          </Description>
        }
        buttonRounded={true}
        textOnLeft={true}
        primaryButtonText="Learn More"
        imageSrc={
          "https://www.verzeo.com/new/images/newblogs/good-ca.png"
        }
        imageCss={imageCss}
        imageDecoratorBlob={false}
        imageDecoratorBlobCss={tw`left-1/2 -translate-x-1/2 md:w-32 md:h-32 opacity-25`}
      />
     
    
   
    
    
        

      <MainFeature

        
        heading={
          <>
           What you will get?
          </>
        }
        description={
          <Description>
            <li>Providing goodies like T-shirt, Bag, Cap, Diary, Pen drive, Stickers and so on.</li>
            <li>Earn great Cash rewards.</li>
            <li>Student referral rewards</li>
            <li>Work Experience Certificate</li> 
            <li>Opportunity to interact and network with industry experts through our various events</li>
            <li>Opportunity to become a part of us (PPO)</li>
            <li>Huge cash incentives on completing targets</li>
          </Description>
        }
        buttonRounded={true}

        textOnLeft={false}
        // primaryButtonText="Learn More".

        imageSrc={
          "https://smartknower.com/images/blog-main-page/reasons.png"
        }
        imageCss={imageCss}
        imageDecoratorBlob={false}
        imageDecoratorBlobCss={tw`left-1/2 -translate-x-1/2 md:w-32 md:h-32 opacity-25`}
      />
      <Signup />
      <Testimonial
        subheading=""
        heading={<>Our Campus Ambassador</>}
      />
     
      <Footer />
    </Router>
    
    </AnimationRevealPage>
  );
}
