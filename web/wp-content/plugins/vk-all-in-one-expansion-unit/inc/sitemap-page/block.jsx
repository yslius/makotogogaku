;(function(wp){
  const { __ } = wp.i18n
  const { registerBlockType } = wp.blocks
  const { ServerSideRender } = wp.components
  const { Fragment } = wp.element
  const React = wp.element
  const BlockIcon = (
	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0)">
<path d="M11.5 6V7H5.5V9H6.5V8H17.5V9H18.5V7H12.5V6H11.5Z" fill="black"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 1.5V4H14.5V1.5H9.5ZM9 0C8.44772 0 8 0.447715 8 1V4.5C8 5.05228 8.44772 5.5 9 5.5H15C15.5523 5.5 16 5.05228 16 4.5V1C16 0.447715 15.5523 0 15 0H9Z" fill="black"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 11V13.5H8.5V11H3.5ZM3 9.5C2.44772 9.5 2 9.94772 2 10.5V14C2 14.5523 2.44772 15 3 15H9C9.55228 15 10 14.5523 10 14V10.5C10 9.94772 9.55228 9.5 9 9.5H3Z" fill="black"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M15.5 11V13.5H20.5V11H15.5ZM15 9.5C14.4477 9.5 14 9.94772 14 10.5V14C14 14.5523 14.4477 15 15 15H21C21.5523 15 22 14.5523 22 14V10.5C22 9.94772 21.5523 9.5 21 9.5H15Z" fill="black"/>
<path d="M7.02166 11.5C8.12596 11.5 8.69181 12.4565 8.61827 13.2832L10.8895 13.2779C12.3071 13.2779 13.0309 14.9832 12.0553 16.0035L9.59833 18.5904L10.6845 22.0882C10.9884 23.0594 10.3009 24.1799 9.15005 24.1799H5.86199C5.49242 24.1799 5.18431 24.0623 4.94092 23.887L4.74798 24.4359L4.74336 24.4483C4.22239 25.8506 2.24664 25.8506 1.72567 24.4483L1.72013 24.4334L-1.42461 15.3852L-1.43556 15.3474C-1.68861 14.4742 -1.12706 13.2779 0.107918 13.2779H3.2686L3.51343 12.59C3.73899 11.9389 4.35249 11.5096 5.02799 11.5076L5.03268 11.5076L7.02166 11.5Z" fill="white"/>
<path d="M10.8895 14.7778L7.62346 14.7854C7.57942 14.7854 7.53538 14.8158 7.5207 14.8614L7.27116 15.5832C7.24915 15.6592 7.30052 15.7352 7.37392 15.7352H8.64364C8.73905 15.7352 8.79043 15.8567 8.72437 15.9251L6.69869 18.1058H6.70603L7.74823 21.5021C7.77025 21.578 7.71887 21.6464 7.64548 21.6464H6.62529C6.57392 21.6464 6.53722 21.616 6.52254 21.5704L6.00144 19.8305C5.97208 19.7241 5.83264 19.7241 5.79594 19.8229L5.37025 21.0462C5.36291 21.069 5.36291 21.0918 5.37025 21.1146L5.75924 22.5962C5.77392 22.6418 5.81796 22.6797 5.86199 22.6797H9.15006C9.22345 22.6797 9.27483 22.6038 9.25281 22.5354L7.92437 18.2577C7.90969 18.2197 7.92437 18.1741 7.95373 18.1437L10.9702 14.9678C11.0363 14.8994 10.9849 14.7778 10.8895 14.7778Z" fill="black"/>
<path d="M7.02164 13L5.03265 13.0076C4.98862 13.0076 4.94458 13.038 4.9299 13.0836L4.67302 13.8054C4.64366 13.8814 4.70238 13.9573 4.77577 13.9573H5.61247C5.68586 13.9573 5.73724 14.0333 5.71522 14.1093L3.34458 20.8259C3.30789 20.9247 3.17578 20.9247 3.13908 20.8259L1.43633 15.9784C1.40697 15.9024 1.46569 15.8265 1.53908 15.8265H2.3978C2.44183 15.8265 2.48587 15.8568 2.50055 15.9024L3.11706 17.65C3.15376 17.7487 3.28587 17.7487 3.32257 17.65L4.27669 14.9299C4.30605 14.8539 4.24733 14.7779 4.17394 14.7779H0.107895C0.0345005 14.7779 -0.0168755 14.8539 0.0051428 14.9299L3.13174 23.9259C3.16844 24.0247 3.30055 24.0247 3.33724 23.9259L7.12439 13.152C7.14641 13.076 7.09503 13 7.02164 13Z" fill="#D8141C"/>
</g>
<defs>
<clipPath id="clip0">
<rect width="24" height="24" fill="white"/>
</clipPath>
</defs>
</svg>
  );

  registerBlockType("vk-blocks/sitemap", {
    title: __( 'HTML Sitemap', 'veu-block' ),
    icon: BlockIcon,
    category: "veu-block",
    edit: ({className}) => {
      return (
          <Fragment>
            <div className={`${className} veu_sitemap_block`} >
              <ServerSideRender
                block="vk-blocks/sitemap"
                attributes={{className: className}}
              />
            </div>
          </Fragment>
        )
    },
    save: () => null
  })
})(wp);
