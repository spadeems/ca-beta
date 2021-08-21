import React from "react";
import "tailwindcss/dist/base.css";
import "styles/globalStyles.css";
import Slider from "react-slick";
import styled from "styled-components";
import tw from "twin.macro";
import { css } from "styled-components/macro"; //eslint-disable-liney

import { ReactComponent as QuotesLeftIcon } from "./images/quotes-l.svg";
import { ReactComponent as QuotesRightIcon } from "./images/quotes-r.svg";
import { ReactComponent as ArrowLeftIcon } from "./images/arrow-left-2-icon.svg";
import { ReactComponent as ArrowRightIcon } from "./images/arrow-right-2-icon.svg";
import { ReactComponent as SvgDecoratorBlob1 } from "./images/svg-decorator-blob-4.svg";
import { ReactComponent as SvgDecoratorBlob2 } from "./images/svg-decorator-blob-5.svg";

import "slick-carousel/slick/slick.css";
import Restaurant from "component/RestaurantLandingPage";
const Container = tw.div`relative`;
const Content = tw.div`max-w-screen-xl mx-auto py-20 lg:py-24`; 
const HeadingInfoContainer = tw.div`flex flex-col items-start`;
const HeadingDescription = tw.p`mt-4 font-medium text-gray-600 text-left max-w-2xl px-12`;
const HeadingTitle = tw.h2`text-4xl sm:text-5xl font-black tracking-wide text-left px-12`;
const TestimonialSliderContainer = tw.div`mt-24`;
const TestimonialSlider = styled(Slider)``;
const Testimonial = tw.div`flex! flex-col items-center md:items-stretch md:flex-row md:justify-center outline-none`;
const ImageContainer = styled.div`
  ${tw`md:mx-3 lg:mx-6 w-2/3 md:w-4/12 rounded flex items-center max-w-xs md:max-w-none`}
  img {
    ${tw`rounded md:max-w-xs`}
  }
`;
const TextContainer = tw.div`md:mx-3 lg:mx-6 md:w-6/12 py-4 flex flex-col justify-between`;
const QuoteContainer = tw.div`relative p-6 md:p-8 lg:p-10 mt-4 md:mt-0`;
const Quote = tw.blockquote`text-center md:text-left font-medium text-base lg:text-lg xl:text-xl`;
const CustomerInfo = tw.div`px-5 lg:px-10 text-center md:text-left mt-4 md:mt-0`;
const CustomerName = tw.h5`font-bold text-lg lg:text-xl xl:text-2xl text-gray-700`;
const CustomerTitle = tw.p`font-medium text-sm`;

const QuotesLeft = tw(QuotesLeftIcon)`w-8 h-8 lg:w-10 lg:h-10 text-gray-500 absolute top-0 left-0`;
const QuotesRight = tw(QuotesRightIcon)`w-8 h-8 lg:w-10 lg:h-10 text-gray-500 absolute bottom-0 right-0`;
const ArrowRight = tw(ArrowRightIcon)`text-gray-900`;
const ArrowLeft = tw(ArrowLeftIcon)`text-gray-900`;
const SliderControlButtonContainer = styled.div`
  ${tw`absolute top-0 h-full flex items-end md:items-center z-20`}
  button {
    ${tw`text-secondary-500 hover:text-primary-500 focus:outline-none transition duration-300 transform hover:scale-125 transform -translate-y-2/3 md:translate-y-0`}
    svg {
      ${tw`w-8`}
    }
  }
`;

const NextArrow = ({ currentSlide, slideCount, ...props }) => (
  <SliderControlButtonContainer tw="right-0">
    <button {...props}>
      <ArrowRight />
    </button>
  </SliderControlButtonContainer>
);
const PreviousArrow = ({ currentSlide, slideCount, ...props }) => (
  <SliderControlButtonContainer tw="left-0">
    <button {...props}>
      <ArrowLeft />
    </button>
  </SliderControlButtonContainer>
);

const DecoratorBlob1 = tw(
  SvgDecoratorBlob1
)`absolute w-32 top-0 left-0 -z-10 text-primary-500 opacity-25 transform -translate-x-full`;
const DecoratorBlob2 = tw(
  SvgDecoratorBlob2
)`absolute w-32 bottom-0 right-0 -z-10 text-pink-500 opacity-15 transform translate-x-2/3 translate-y-8`;

export default () => {
  /*
   * You can modify the testimonials shown by modifying the array below
   * You can add or remove objects from the array as you need.
   */
  // const testimonials = [ {
  //   imageSrc:
  //     "images/testimonial/AK 3.jpg",
  //   quote:
  //     "At Spade we try to create and develop an opportunity to all the people involved to come together with team spirit and exercise both their heart and mind out as per their technological capacities.",
  //   customerName: "Mr. Abhishek Kumar Jha",
  //   customerTitle: "Founder, EventsNYC"
  // },
  //   {
  //     imageSrc:
  //       "images/testimonial/Pooja maam.jpg",
  //     quote:
  //       "Spade: the one step for every service. It is commendable to see such inspiring team of such leaders providing the appreciable quality of services being the experts of their respective fields within the specified time. The comfortable work ambience and relation provided unlocks various opportunities and aspects of work.",
  //     customerName: "Ms. Pooja",
  //     customerTitle: "CEO, Delos Inc."
  //   },
   
  //   {
  //     imageSrc:
  //       "images/testimonial/himanshu.jpg",
  //     quote:
  //       "The company readily adopts innovation. I am proud to be a part of a team which is market reliable, deals with high quality outcomes and is flexible working on various projects, thereby, providing ample of opportunities to showcase one’s talent. Another thing that fascinates me is seeing people with different cultural backgrounds coming together as an amazing team.",
  //     customerName: "Mr. Himanshu Singh",
  //     customerTitle: "Event Manager, Brite"
  //   },
  //   {
  //     imageSrc:
  //       "images/testimonial/team_image2.jpg",
  //     quote:
  //       "It’s always a pleasure working with this team. Each team member has a tremendous skill and professional conduct in business. The event management stays one step ahead of the planning process. I love how every detail is considered and every issue is addressed efficiently. I will definitely want to be a part of Spade in near future",
  //     customerName: "Ms. Shrishti Maurya",
  //     customerTitle: "Event Manager, Brite"
  //   },
  //   {
  //     imageSrc:
  //       "images/testimonial/WhatsApp Image 2021-03-07 at 19.38.36.jpeg",
  //     quote:
  //       "I have witnessed some 500 events organized by Spade and frankly, thank you for doing and amazing job. It was immense pleasure to work under such leaders and with such inspiring team. As a member of Spade Advisory Board, I am always there for Spade to provide the support to the team if need be.",
  //     customerName: "Mr. Vikram Pratap Singh",
  //     customerTitle: "Event Manager, Brite"
  //   },
  //   {
  //     imageSrc:
  //       "images/testimonial/testimonial-1.jpg",
  //     quote:
  //       "The most dedicated determined leader with an extraordinary team whom he loves more than anyone else. After gaining such successful experience, Spade has paved road to opportunities and adventure. Since the inception of Spade EMS, they’re trying to be the educational support everyday. It has been a blessing to us.",
  //     customerName: "Nitin Bhardwaj",
  //     customerTitle: "Event Manager, Brite"
  //   },
  //   {
  //     imageSrc:
  //       "images/testimonial/WhatsApp Image 2021-03-07 at 19.40.50.jpeg",
  //     quote:
  //       "The unique thing about Spade is that the entire team works endlessly towards helping clients achieve their goal. SPADE committee members are self motivated, talented, enthusiastic, dedicated and extremely creative individuals. Always up for challenges with  the capability to pull things off and  always thinking of inspiring youth. As facilitator of Spade, I see them as leaders in the field of event management.",
  //     customerName: "Ms. Manvinder Gill",
  //     customerTitle: "Event Manager, Brite"
  //   },
  //   {
  //     imageSrc:
  //       "images/testimonial/WhatsApp Image 2021-03-07 at 19.39.51.jpeg",
  //     quote:
  //       "It’s really appreciable to see Spade growing at an amazing speed over the nation. It’s my immense pleasure to be the part of this team and this amazing journey it’s been so far from day one. I appreciate the dedication and knowledge shown by the team. Keep the spirit up. Wishing you flying with all the colours.",
  //     customerName: "Dr. Richa Gupta",
  //     customerTitle: "Event Manager, Brite"
  //   },
  //   {
  //     imageSrc:
  //       "images/testimonial/KUSHAGRA SIR (2).jpg",
  //     quote:
  //       "If content is the exterior of the business then both marketing and sponsorship is foundation of that successful business, having said that, I really believe this is what Spade has applied over the years after noting the success it has made and can foresee many more to come.",
  //     customerName: "Mr. Kushagra Jaiswal",
  //     customerTitle: "Event Manager, Brite"
  //   }
  // ];
  return (
    // <Container>
    //   <Content>
    //     <HeadingInfoContainer>
    //       <HeadingTitle>What Members Are Saying</HeadingTitle>
    //       <HeadingDescription>World's most influential media, entertainment &amp; technology show inspirational speakers including game changing not just a large-scale conference.</HeadingDescription>
    //     </HeadingInfoContainer>
    //     <TestimonialSliderContainer>
    //       <TestimonialSlider nextArrow={<NextArrow />} prevArrow={<PreviousArrow />}>
    //         {testimonials.map((testimonial, index) => (
    //           <Testimonial key={index}>
    //             <ImageContainer>
    //               <img src={testimonial.imageSrc} alt={testimonial.customerName} />
    //             </ImageContainer>
    //             <TextContainer>
    //               <QuoteContainer>
    //                 <QuotesLeft />
    //                 <Quote>{testimonial.quote}</Quote>
    //                 <QuotesRight />
    //               </QuoteContainer>
    //               <CustomerInfo>
    //                 <CustomerName>{testimonial.customerName}</CustomerName>
    //                 {/* <CustomerTitle>{testimonial.customerTitle}</CustomerTitle> */}
    //               </CustomerInfo>
    //             </TextContainer>
    //           </Testimonial>
    //         ))}
    //       </TestimonialSlider>
    //     </TestimonialSliderContainer>
    //   </Content>
    //   <DecoratorBlob1 />
    //   <DecoratorBlob2 />
    // </Container>
    <Restaurant/>
  );
};
 

