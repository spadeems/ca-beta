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
import Cambassador from "component/Campusambassador";
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
 
  return (
    
    <Cambassador/>
  );
};
 

