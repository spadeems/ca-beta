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
// import chefIconImageSrc from "images/chef-icon.svg";
// import celebrationIconImageSrc from "images/celebration-icon.svg";
// import shopIconImageSrc from "images/shop-icon.svg";

export default () => {
  const Subheading = tw.span`tracking-wider text-sm font-medium`; 
  const HighlightedText = tw.span`bg-primary-500 text-gray-100 px-4 transform -skew-x-12 inline-block`;
  const HighlightedTextInverse = tw.span`bg-gray-100 text-primary-500 px-4 transform -skew-x-12 inline-block`;
  const Description = tw.span`inline-block mt-8`;
  const imageCss = tw`rounded-4xl`;
  return (
    <AnimationRevealPage>
      <Hero
        heading={<>Campus Ambassador </>}
        description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
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
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
            <br />
            <br />
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </Description>
        }
        buttonRounded={true}
        textOnLeft={true}
        primaryButtonText="Learn More"
        imageSrc={
          "https://www.shoutlo.com/uploads/articles/header-img-shoutlo-campus-ambassador-program1.jpg"
        }
        imageCss={imageCss}
        imageDecoratorBlob={false}
        imageDecoratorBlobCss={tw`left-1/2 -translate-x-1/2 md:w-32 md:h-32 opacity-25`}
      />
    
         <MainFeature
        
        heading={
          <>
           What you will learn?
          </>
        }
        description={
          <Description>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
            <br />
            <br />
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </Description>
        }
        buttonRounded={true}
        textOnLeft={false}
        primaryButtonText="Learn More"
        imageSrc={
          "https://smartknower.com/images/blog-main-page/reasons.png"
        }
        imageCss={imageCss}
        imageDecoratorBlob={false}
        imageDecoratorBlobCss={tw`left-1/2 -translate-x-1/2 md:w-32 md:h-32 opacity-25`}
      />
       <MainFeature
        
        heading={
          <>
            Responsibilities of a campus ambassadar
          </>
        }
        description={
          <Description>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
            <br />
            <br />
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </Description>
        }
        buttonRounded={true}
        textOnLeft={false}
        primaryButtonText="Learn More"
        imageSrc={
          "https://www.verzeo.com/new/images/newblogs/good-ca.png"
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
    </AnimationRevealPage>
  );
}
