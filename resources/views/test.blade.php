<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design By You - Button Colors</title>
    <link rel="stylesheet" href="/extra-assets/custom/custom.css">
    <style>
        .arrow-button:disabled {
            color: #ccc;
            cursor: not-allowed;
            pointer-events: none;
        }










        /* Menu wrapper styles remain unchanged */
        .tray-menu-wrapper {
            left: 0px;
            bottom: 0px;
            width: 100%;
            position: absolute;
            overflow: hidden;
            background-color: rgb(255, 255, 255);
        }

        .tray-menu-wrapper.open {
            height: 504px;
            transform-origin: 50% 50% 0px;
            opacity: 1;
            visibility: visible;
        }

        .tray-menu-header {
            top: 0px;
            position: absolute;
        }

        .close-component-menu {
            left: 50%;
            padding: 0px;
            width: 40px;
            height: 40px;
            outline: none;
            background: none rgb(255, 255, 255);
            position: relative;
            border-radius: 100%;
            transform: translateX(-50%);
            z-index: 4;
        }

        .tray-menu-body {
            width: 100%;
            height: 100%;
            padding-top: 0px;
        }

        .tray-mc-list-wrapper {
            top: 0px;
            width: 100vw;
            height: 100%;
            font-size: 16px;
            text-align: left;
            overflow-y: scroll;
            position: absolute;
            padding: 50px 30px 0px;
            background-color: transparent;
        }

        .mc-list-title {
            font-size: 24px;
            font-weight: 500;
            line-height: 1.2;
            margin-bottom: 19px;
        }

        .mc-list-title span {
            color: rgb(189, 189, 189);
            margin-left: 3px;
        }

        .tray-mc-list {
            width: 100%;
            height: 100%;
            list-style: none;
            overflow: hidden scroll;
            padding-bottom: 50px;
            scrollbar-width: none;
        }

        .tray-mc-list button.ncss-btn {
            margin: 2px;
        }

        .tray-mc-list-item {
            height: 78px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 500;
            border-bottom: 1px solid rgb(229, 229, 229);
            width: 48%;
        }

        .mc-item {
            display: flex;
            flex-direction: row;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-flex: 1;
            flex-grow: 1;
            -webkit-box-pack: start;
            justify-content: flex-start;
        }

        .tray-mc-list-item-selection::before {
            background-size: contain;
            background-image: url(/extra-assets/custom/images/10A.jpg);
        }

        .tray-mc-list-item-selection::before {
            width: 10px;
            height: 10px;
            content: "";
            display: block;
            margin: 0px 16px 0px 0px;
            border-radius: 100%;
            border: 1px solid rgb(229, 229, 229);
        }

        .tray-mc-list-item span {
            line-height: 1.2;
        }

        .mc-item-selected {
            display: flex;
            flex-direction: row;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-flex: 1;
            flex-grow: 1;
            -webkit-box-pack: start;
            justify-content: flex-start;

            margin-right: 10px;
        }

        .tray-mc-list-item-selection-selected::before {
            background-size: contain;
            /* background-image: url(//www.nike.com/assets/nikeid/swatches/01V.jpg); */
            background-color: var(--option-color-selected);
        }

        .tray-mc-list-item-selection-selected::before {
            width: 10px;
            height: 10px;
            content: "";
            display: block;
            margin: 0px 16px 0px 0px;
            border-radius: 100%;
            border: 1px solid rgb(229, 229, 229);
        }

        .tray-mc-list-item-title-selected {
            white-space: nowrap;
            text-overflow: ellipsis;
            overflow: hidden;
            line-height: 28px;
        }

        .tray-mc-list-item-check {
            display: flex;
            -webkit-box-flex: 1;
            flex-grow: 1;
        }









        .menu-panel {
            /* Styles remain unchanged */
            background-color: rgb(255, 255, 255);
            width: 100%;
            height: 504px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            transform: translateY(100%);
            transition: transform 0.3s ease-in-out;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .tray-menu-wrapper.open .menu-panel {
            transform: translateY(0);
        }

        .tray-menu-list-item.selected {
            font-weight: 600;
            color: #000;
        }

        .tray-menu-list-item.selected::before {
            background-size: contain;
            background-image: url(/extra-assets/custom/images/90ugumrubber.jpg);
            position: absolute;
            left: 0;
            color: #000;
            font-size: 20px;
            line-height: 1;
            top: 50%;
            transform: translateY(-50%);
        }

        .color-button.selected {
            box-shadow: 0 0 0 2px rgb(255, 255, 255), 0 0 0 4px rgb(17, 17, 17);
            /* Outline for selected */
        }

        .mkt-component-option-name {
            width: 120px;
            font-size: 12px;
            font-weight: 500;
            position: absolute;
            text-align: center;
            transform: translateY(38px);
        }







        @media (min-width: 568px) {
            .header {
                padding: 44px 20px;
            }

            .tray-header {
                top: 28px;
            }

            .customisation-tray-button {
                border-radius: 100%;
                border: 1px solid rgb(229, 229, 229);
            }

            .customisation {
                top: 50%;
                left: 50%;
                height: auto;
                width: 420px;
                margin: 0px auto;
                position: absolute;
                transform: translate(-50%, -50%);
            }

            .current-part {
                max-width: 30vw;
            }

            .tray-trigger-menu-button {
                width: auto;
                left: auto;
                right: 50px;
                height: auto;
                transform: none;
                border-radius: 24px;
                padding: 6px 18px 6px 16px;
                border: 1px solid rgb(229, 229, 229);
            }

            .mc-active {
                margin: 0px auto;
            }

            .tray-menu-header {
                top: 45px;
            }

            .close-component-menu {
                padding: 0px;
                width: 40px;
                height: 40px;
                border-radius: 100%;
                left: auto;
                right: 50px;
                transform: none;
                border: 1px solid rgb(229, 229, 229);
            }

            .tray-mc-list {
                padding-bottom: 0px;
            }

            .tray-mc-list-item {
                height: 58px;
                border: none;
            }

            .mc-item-selected {
                max-width: 275px;
            }
        }

        @media (min-width: 769px) {
            .tray-mc-list-wrapper {
                padding: 50px 60px 50px 168px;
            }

            .mc-item {
                -webkit-box-flex: 0;
                flex-grow: 0;
            }

            .mc-item-selected {
                width: 65%;
            }

            .mc-item-selected {
                -webkit-box-flex: 0;
                flex-grow: 0;
            }

            .tray-mc-list-item-check {
                -webkit-box-pack: start;
                justify-content: flex-start;
            }
        }
    </style>
    <link rel="stylesheet" href="/extra-assets/custom/eg-gb.min.css">
</head>

<body>
    <div class="cs-id-builder-container">
        <div class="modal-container">
            <div class="container">
                <header class="d-sm-flx flx-ai-sm-c flx-jc-sm-sb header">
                    <div class="d-ihr header-left">
                        <div class="body-3 d-sm-flx flx-dir-sm-c product-info d-flx-md-flx">
                            <span>Sample Design By You</span>
                            <span>Price</span>
                        </div>
                    </div>
                    <div class="d-ihr header-right">
                        <button class="d-sm-flx flx-ai-sm-c flx-jc-sm-c ncss-btn button-share" aria-label="Share">
                            <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" width="24px" height="24px"
                                fill="none">
                                <path stroke="currentColor" stroke-width="1.5"
                                    d="M3.75 13v6A2.25 2.25 0 006 21.25h12A2.25 2.25 0 0020.25 19v-6"></path>
                                <path stroke="currentColor" stroke-width="1.552" d="M12 19V4"></path>
                                <path stroke="currentColor" stroke-width="1.5"
                                    d="M16.773 8.834l-4.772-4.773-4.774 4.773">
                                </path>
                            </svg>
                        </button>
                        <button class="ncss-btn button-done">Done</button>
                    </div>
                </header>

                {{-- <main class="main-content">
                    <img id="shoeImage" src="images/left.png" alt="Design By You" class="shoe-image">
                </main> --}}

                <footer id="footer" class="footer" style="height: 230px;">
                    <div class="d-sm-flx u-full-width flx-jc-sm-sb tray-header">
                        <button id="tray-preview-open-button" aria-label="Close customisation tray"
                            class="d-sm-flx flx-ai-sm-c flx-jc-sm-c ncss-btn customisation-tray-button">
                            <svg id="tray-preview-icon" aria-hidden="true" focusable="false" viewBox="0 0 24 24"
                                width="24px" height="24px" fill="none">
                                <path stroke="currentColor" stroke-width="1.5" d="M18.966 8.476L12 15.443 5.033 8.476">
                                </path>
                            </svg>
                        </button>
                        <div class="d-sm-flx flx-jc-sm-c flx-ai-sm-c customisation">
                            <button id="mc-prev" class=" d-sm-flx flx-ai-sm-fe ncss-btn prev-customisation-button"
                                aria-label="Previous customisation">
                                <div class="d-sm-flx flx-ai-sm-c flx-jc-sm-fe arrow-button">
                                    <svg fill="none" viewBox="0 0 24 24" width="24px" height="24px">
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M11.021 18.967L4.055 12l6.966-6.967M4 12h17"></path>
                                    </svg>
                                </div>
                            </button>
                            <div class="d-sm-flx flx-jc-sm-c flx-ai-sm-c current-part">
                                <div class="part-info">
                                    <div class="components">
                                        <span id="componentName" class="component-name"></span>
                                        <span id="componentSection" class="component-section"></span>
                                    </div>
                                </div>
                            </div>
                            <button id="mc-next" class="d-sm-flx flx-ai-sm-fe ncss-btn next-customisation-button"
                                aria-label="Next customisation">
                                <div class="d-sm-flx flx-ai-sm-c flx-jc-sm-fs arrow-button">
                                    <svg fill="none" viewBox="0 0 24 24" width="24px" height="24px">
                                        <path stroke="currentColor" stroke-width="1.5"
                                            d="M12.979 18.967L19.945 12 12.98 5.033M20 12H3"></path>
                                    </svg>
                                </div>
                            </button>
                        </div>
                        <button id="tray-trigger-open-button" aria-label="Tray trigger open button"
                            class="d-sm-flx flx-ai-sm-c flx-jc-sm-c ncss-btn tray-trigger-menu-button">
                            <svg viewBox="0 0 24 24" width="24px" height="24px" fill="none">
                                <path stroke="currentColor" stroke-width="1.5" d="M21 5.25H3M21 12H3m18 6.75H3"></path>
                            </svg>
                            <span style="margin-left: 3px;">Menu</span>
                        </button>
                    </div>

                    <div class="d-sm-flx flx-ai-sm-c flx-jc-sm-c flx-dir-sm-c tray-body">
                        <div class="d-sm-flx flx-dir-sm-c flx-jc-sm-c mc-active">
                            <div class="d-sm-flx flx-ai-sm-c">
                                <div class="color-option" style="opacity: 1; transform: none; z-index: 1;">
                                    <div>
                                        <div class="d-sm-flx flx-jc-sm-c mkt-component-option-list">
                                            <div class="list-color">
                                                <div id="colorOptionsContainer"
                                                    class="d-sm-flx flx-jc-sm-c u-full-width">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <div id="menu-wrapper" class="tray-menu-wrapper">
                    <div class="d-sm-flx u-full-width flx-jc-sm-fe tray-menu-header">
                        <button id="tray-trigger-close-button" aria-label="Tray trigger close button"
                            class="d-sm-flx flx-ai-sm-c flx-jc-sm-c ncss-btn ncss-btn close-component-menu">
                            <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" width="24px"
                                height="24px" fill="none">
                                <path stroke="currentColor" stroke-width="1.5"
                                    d="M18.973 5.027L5.028 18.972M5.027 5.027l13.945 13.945"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="d-sm-flx flx-ai-sm-c flx-jc-sm-c flx-dir-sm-c tray-menu-body">
                        <div id="mc-list" class="d-sm-flx flx-dir-sm-c tray-mc-list-wrapper">
                            <h1 id="mc-list-title" class="mc-list-title">COMPONENTS
                                <span id="mc-list-count">10</span>
                            </h1>
                            <div id="mc-list-wrapper" class="d-sm-flx flx-wr-sm-w flx-ac-sm-fs ncss-btn tray-mc-list">

                                {{-- <button id="mc-list-item" aria-describedby="Tip/eyestay/tongue"
                                    class="ncss-btn d-sm-flx flx-ai-sm-c tray-mc-list-item">
                                    <div class="mc-item">
                                        <div id="tray-mc-list-item-selection" class="tray-mc-list-item-selection">
                                        </div>
                                        <span id="tray-mc-list-item-title"
                                            class="tray-mc-list-item-title">Tip/eyestay/tongue</span>
                                    </div>
                                </button>
                                <button id="mc-list-item" aria-describedby="Outsole"
                                    class="ncss-btn d-sm-flx flx-ai-sm-c tray-mc-list-item">
                                    <div class="mc-item-selected">
                                        <div id="tray-mc-list-item-selection"
                                            class="tray-mc-list-item-selection-selected">
                                        </div>
                                        <span id="tray-mc-list-item-title"
                                            class="tray-mc-list-item-title-selected">Outsole</span>
                                    </div>


                                    <div class="tray-mc-list-item-check" id="mc-list-item-answered">
                                        <svg aria-hidden="true" focusable="false" viewBox="0 0 24 24" width="24px"
                                            height="24px" fill="none">
                                            <path stroke="currentColor" stroke-width="1.5"
                                                d="M5.03 11.69l4.753 4.754 9.186-9.188"></path>
                                        </svg>
                                    </div>
                                </button> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const footer = document.getElementById('footer');
        const trayPreviewOpenButton = document.getElementById('tray-preview-open-button');
        const trayPreviewIcon = document.getElementById('tray-preview-icon');
        const trayTriggerOpenButton = document.getElementById('tray-trigger-open-button');
        const menuWrapper = document.getElementById('menu-wrapper');
        const mcPrevButton = document.getElementById('mc-prev');
        const mcNextButton = document.getElementById('mc-next');
        const componentNameDisplay = document.getElementById('componentName');
        const componentSectionDisplay = document.getElementById('componentSection');
        const colorOptionsContainer = document.getElementById('colorOptionsContainer');
        const mcListWrapper = document.getElementById('mc-list-wrapper');
        const mcListCount = document.getElementById('mc-list-count');

        let isFooterExpanded = true;

        // --- Data: Component to Color Mapping ---
        const componentData = [{
                name: "Vamp/Quarter",
                colors: [{
                    code: '#fff',
                    label: 'White',
                    selected: true
                }, {
                    code: '#000',
                    label: 'Black'
                }, {
                    code: '#999',
                    label: 'Grey'
                }, {
                    code: '#07b',
                    label: 'University Blue'
                }, {
                    code: '#019',
                    label: 'Game Royal'
                }, {
                    code: '#f9a',
                    label: 'Pink Foam'
                }, {
                    code: '#c00',
                    label: 'University Red'
                }]
            }, {
                name: "Foxing/Lining",
                colors: [{
                    code: '#ccc',
                    label: 'Silver',
                    selected: true
                }, {
                    code: '#fff',
                    label: 'White'
                }, {
                    code: '#b08d57',
                    label: 'Brown',
                }]
            }, {
                name: "Swoosh Accent",
                colors: [{
                    code: '#4b6cb7',
                    label: 'Blue',
                    selected: true
                }, {
                    code: '#000',
                    label: 'Black'
                }, {
                    code: '#e0939d',
                    label: 'Pink'
                }]
            }, {
                name: "Lace/Dubrae",
                colors: [{
                    code: '#fff',
                    label: 'White',
                    selected: true
                }, {
                    code: '#000',
                    label: 'Black'
                }, {
                    code: '#6a8e52',
                    label: 'Green'
                }]
            }, {
                name: "Midsole",
                colors: [{
                    code: '#fff',
                    label: 'White',
                    selected: true
                }, {
                    code: '#f0c98f',
                    label: 'Tan'
                }]
            }, {
                name: "Tip/eyestay/tongue",
                colors: [{
                        code: '#fff',
                        label: 'White',
                        selected: true
                    },
                    {
                        code: '#000',
                        label: 'Black'
                    },
                    {
                        code: '#999',
                        label: 'Grey'
                    },
                    {
                        code: '#f0c98f',
                        label: 'Tan'
                    },
                    {
                        code: '#b08d57',
                        label: 'Brown'
                    },
                    {
                        code: '#6a8e52',
                        label: 'Green'
                    },
                    {
                        code: '#4b6cb7',
                        label: 'Blue'
                    },
                    {
                        code: '#8c76b7',
                        label: 'Purple'
                    },
                    {
                        code: '#e0939d',
                        label: 'Pink'
                    }
                ]
            }, {
                name: "Swoosh/Backtab",
                colors: [{
                    code: '#e0939d',
                    label: 'Pink',
                    selected: true
                }, {
                    code: '#000',
                    label: 'Black'
                }, {
                    code: '#fff',
                    label: 'White'
                }]
            }, {
                name: "Tongue Label",
                colors: [{
                    code: '#000',
                    label: 'Black',
                    selected: true
                }, {
                    code: '#fff',
                    label: 'White'
                }]
            },
            {
                name: "Backtab Logo/Text",
                colors: [{
                    code: '#999',
                    label: 'Grey',
                    selected: true
                }, {
                    code: '#000',
                    label: 'Black'
                }]
            },
            {
                name: "Outsole",
                colors: [{
                    code: '#b08d57',
                    label: 'Brown',
                    selected: true
                }, {
                    code: '#000',
                    label: 'Black'
                }, {
                    code: '#fff',
                    label: 'White'
                }]
            }
        ];

        let currentComponentIndex = 0;

        // --- Functions ---
        /** Updates the Footer Top Bar (Arrows) and Bottom Bar (Colors) based on the current index. */
        function updateComponent(newIndex) {
            // No index checking needed here, as the listeners handle the circular math.
            currentComponentIndex = newIndex;
            const component = componentData[currentComponentIndex];
            const componentName = component.name;

            // 1. Update Top Bar Text. Arrows are now always enabled.
            componentNameDisplay.textContent = componentName;
            componentSectionDisplay.textContent = `${currentComponentIndex + 1}/${componentData.length}`;
            mcPrevButton.disabled = false; // Always enabled for circular navigation
            mcNextButton.disabled = false; // Always enabled for circular navigation

            // 2. Update Color Options (Bottom Bar)
            colorOptionsContainer.innerHTML = '';

            component.colors.forEach(color => {
                const wrapper = document.createElement('div');
                wrapper.className = 'd-sm-flx flx-ai-sm-c flx-jc-sm-c flx-dir-sm-c';

                const button = document.createElement('button');
                button.className = 'd-sm-flx flx-ai-sm-c flx-jc-sm-c mkt-component-option flx-gro-sm-0 ncss-btn';
                button.style.setProperty('--option-color', color.code);
                button.dataset.color = color.label;

                if (color.selected) {
                    button.classList.add('selected');
                    // ONLY CREATE AND APPEND LABEL IF SELECTED
                    const label = document.createElement('div');
                    label.className = 'body-4 mkt-component-option-name';
                    label.textContent = color.label;
                    wrapper.appendChild(label); // Append label to wrapper after button
                }

                // The button must be appended BEFORE the label (if it exists) to maintain the original layout flow.
                wrapper.insertBefore(button, wrapper.firstChild); // Place button first

                button.addEventListener('click', function() {
                    const currentComponent = componentData[currentComponentIndex];

                    // 1. Remove 'selected' class from all buttons and remove selection data
                    document.querySelectorAll(
                        '#colorOptionsContainer .mkt-component-option'
                    ).forEach(btn => btn
                        .classList.remove('selected'));
                    currentComponent.colors.forEach(c => c.selected = false);

                    // 2. Set 'selected' class on clicked button and update selection data
                    this.classList.add('selected');
                    color.selected = true;

                    // 3. Re-run updateComponent to redraw colors and show ONLY the new label
                    updateComponent(currentComponentIndex);

                    // Rebuild menu to update selection dot without closing the menu
                    buildMenuPanel();
                });
                colorOptionsContainer.appendChild(wrapper);
            });
            buildMenuPanel();
        }

        /** Builds the Menu panel dynamically and attaches event listeners. */
        function buildMenuPanel() {
            mcListWrapper.innerHTML = ''; // Clear the menu wrapper
            mcListCount.textContent = componentData.length;

            componentData.forEach((component, index) => {
                const item = document.createElement('button');
                item.className = 'ncss-btn d-sm-flx flx-ai-sm-c tray-mc-list-item';
                item.dataset.index = index;
                item.setAttribute('aira-describedby', component.name);

                const mcItem = document.createElement('div');
                mcItem.className = 'mc-item';
                const liSelect = document.createElement('div');
                liSelect.className = 'tray-mc-list-item-selection';
                const lisTitle = document.createElement('span');
                lisTitle.className = 'tray-mc-list-item-title';
                lisTitle.textContent = component.name;

                mcItem.appendChild(liSelect);
                mcItem.appendChild(lisTitle);
                item.appendChild(mcItem);

                if (index === currentComponentIndex) {
                    mcItem.classList.replace('mc-item', 'mc-item-selected');
                    liSelect.classList.replace('tray-mc-list-item-selection',
                        'tray-mc-list-item-selection-selected');

                    const selectedColor = component.colors.find(c => c.selected);
                    if (selectedColor) {
                        liSelect.style.setProperty('--option-color-selected', selectedColor.code);
                    }

                    lisTitle.classList.replace('tray-mc-list-item-title', 'tray-mc-list-item-title-selected');

                    const itemCheck = document.createElement('div');
                    itemCheck.className = 'tray-mc-list-item-check';
                    const svgCheck = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
                    svgCheck.setAttribute('aria-hidden', 'true');
                    svgCheck.setAttribute('focusable', 'false');
                    svgCheck.setAttribute('viewBox', '0 0 24 24');
                    svgCheck.setAttribute('width', '24px');
                    svgCheck.setAttribute('height', '24px');
                    svgCheck.setAttribute('fill', 'none');
                    svgCheck.innerHTML =
                        '<path stroke="currentColor" stroke-width="1.5" d="M5.03 11.69l4.753 4.754 9.186-9.188"></path>';
                    itemCheck.appendChild(svgCheck);
                    item.appendChild(itemCheck);
                }

                item.addEventListener('click', function() {
                    currentComponentIndex = index;

                    const newIndex = parseInt(this.dataset.index);
                    updateComponent(newIndex);
                    menuWrapper.classList.remove('open');
                    document.body.style.overflow = '';
                });

                mcListWrapper.appendChild(item);
            });
        }

        // Toggle Footer Visibility
        trayPreviewOpenButton.addEventListener('click', () => {
            footer.classList.toggle('collapsed'); // Toggle the visual class
            isFooterExpanded = !isFooterExpanded; // Flip the state
            // Update the icon
            trayPreviewIcon.innerHTML = isFooterExpanded ?
                '<path stroke="currentColor" stroke-width="1.5" d="M18.966 8.476L12 15.443 5.033 8.476"></path>' // Down arrow (original state)
                :
                '<path stroke="currentColor" stroke-width="1.5" d="M5.034 15.524L12 8.557l6.967 6.967"></path>'; // Up arrow
            // Update the aria-label for accessibility
            trayPreviewOpenButton.setAttribute(
                'aria-label',
                isFooterExpanded ? 'Close customisation tray' : 'Open customisation tray'
            );
        });

        // Component Navigation Arrows - Implementing Circular - Logic Looping Previous (1 -> 10)
        mcPrevButton.addEventListener('click', () => {
            const numComponents = componentData.length;
            // Formula: (current index - 1 + total length) % total length
            // Example: (0 - 1 + 10) % 10 = 9 (Index 9 is the last item)
            const newIndex = (currentComponentIndex - 1 + numComponents) % numComponents;
            updateComponent(newIndex);
        });

        // Looping Next (10 -> 1)
        mcNextButton.addEventListener('click', () => {
            const numComponents = componentData.length;
            // Formula: (current index + 1) % total length
            // Example: (9 + 1) % 10 = 0 (Index 0 is the first item)
            const newIndex = (currentComponentIndex + 1) % numComponents;
            updateComponent(newIndex);
        });

        // Menu Overlay Open
        trayTriggerOpenButton.addEventListener('click', () => {
            buildMenuPanel();
            menuWrapper.classList.add('open');
            document.body.style.overflow = 'hidden';
        });

        // Menu Overlay Close
        document.getElementById('tray-trigger-close-button').addEventListener('click', () => {
            menuWrapper.classList.remove('open');
            document.body.style.overflow = '';
        });

        // Close menu if clicking outside the panel
        menuWrapper.addEventListener('click', (event) => {
            if (event.target === menuWrapper) {
                menuWrapper.classList.remove('open');
                document.body.style.overflow = '';
            }
        });
        // Initial setup
        updateComponent(currentComponentIndex);
    </script>
</body>

</html>
