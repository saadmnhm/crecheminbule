/*
Custom Widgets JavaScript
Enhanced functionality for accordions, widgets, and page interactions
*/

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initializeAccordions();
    fixEmptyContent();
    enhanceWidgets();
    addScrollAnimations();
    enhanceValuesSection();
});

function initializeAccordions() {
    const accordions = document.querySelectorAll('details[id^="e-n-accordion-item"]');
    
    accordions.forEach(function(accordion, index) {
        const summary = accordion.querySelector('summary');
        
        if (summary) {
            // Add proper ARIA attributes
            const accordionId = accordion.id || 'accordion-' + index;
            const contentId = accordionId + '-content';
            const isOpen = accordion.hasAttribute('open');
            
            summary.setAttribute('aria-expanded', isOpen);
            summary.setAttribute('aria-controls', contentId);
            summary.setAttribute('tabindex', '0');
            
            const content = accordion.querySelector('ul');
            if (content) {
                content.id = contentId;
            }
            
            // Enhanced click handler
            summary.addEventListener('click', function(e) {
                e.preventDefault();
                toggleAccordion(accordion, summary);
            });
            
            // Keyboard support
            summary.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    toggleAccordion(accordion, summary);
                }
                
                // Arrow key navigation
                if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                    e.preventDefault();
                    navigateAccordions(accordions, index, e.key === 'ArrowDown' ? 1 : -1);
                }
            });
            
            // // Add visual focus indicator
            // summary.addEventListener('focus', function() {
            //     this.style.outline = '2px solid #5750A0';
            //     this.style.outlineOffset = '2px';
            // });
            
            summary.addEventListener('blur', function() {
                this.style.outline = 'none';
            });
        }
    });
    
    // Initialize first accordion as open if none are open
    if (accordions.length > 0 && !document.querySelector('details[open]')) {
        accordions[0].setAttribute('open', '');
        const firstSummary = accordions[0].querySelector('summary');
        if (firstSummary) {
            firstSummary.setAttribute('aria-expanded', 'true');
        }
    }
}

function toggleAccordion(accordion, summary) {
    const isCurrentlyOpen = accordion.hasAttribute('open');
    
    // Optional: Close other accordions (comment out for multiple open behavior)
    const allAccordions = document.querySelectorAll('details[id^="e-n-accordion-item"]');
    allAccordions.forEach(function(otherAccordion) {
        if (otherAccordion !== accordion && otherAccordion.hasAttribute('open')) {
            otherAccordion.removeAttribute('open');
            const otherSummary = otherAccordion.querySelector('summary');
            if (otherSummary) {
                otherSummary.setAttribute('aria-expanded', 'false');
            }
        }
    });
    
    // Toggle current accordion
    if (isCurrentlyOpen) {
        accordion.removeAttribute('open');
        summary.setAttribute('aria-expanded', 'false');
    } else {
        accordion.setAttribute('open', '');
        summary.setAttribute('aria-expanded', 'true');
        
        // Smooth scroll to accordion
        setTimeout(function() {
            accordion.scrollIntoView({
                behavior: 'smooth',
                block: 'nearest'
            });
        }, 100);
    }
}

function navigateAccordions(accordions, currentIndex, direction) {
    const nextIndex = currentIndex + direction;
    
    if (nextIndex >= 0 && nextIndex < accordions.length) {
        const nextSummary = accordions[nextIndex].querySelector('summary');
        if (nextSummary) {
            nextSummary.focus();
        }
    }
}

function fixEmptyContent() {
    // Fix empty list items and headers
    const emptyElements = document.querySelectorAll('li:empty, h3:empty, p:empty');
    
    emptyElements.forEach(function(element) {
        element.style.display = 'none';
    });
    
    // Fix broken SVG references
    const brokenSvgs = document.querySelectorAll('svg[fill=""]');
    brokenSvgs.forEach(function(svg) {
        svg.setAttribute('fill', '#5750A0');
    });
    
    // Remove duplicate lists after accordions
    const duplicateLists = document.querySelectorAll('.entry-content details + ul');
    duplicateLists.forEach(function(list) {
        list.style.display = 'none';
    });
    
    // Remove broken style and g elements
    const brokenStyles = document.querySelectorAll('.entry-content style, .entry-content g');
    brokenStyles.forEach(function(element) {
        element.style.display = 'none';
    });
    
    // Fix broken paragraphs containing style or g elements
    const brokenParagraphs = document.querySelectorAll('.entry-content p');
    brokenParagraphs.forEach(function(p) {
        if (p.querySelector('g') || p.querySelector('style')) {
            p.style.display = 'none';
        }
    });
    
    // Fix SVG paths that are empty
    const emptySvgPaths = document.querySelectorAll('svg path[d=""]');
    emptySvgPaths.forEach(function(path) {
        path.parentElement.style.display = 'none';
    });
    
    // Add proper text content to list items with only SVG
    const emptyListItems = document.querySelectorAll('details ul li');
    emptyListItems.forEach(function(li) {
        const textContent = li.textContent.trim().replace(/\s+/g, ' ');
        if (textContent === '' && li.querySelector('svg')) {
            li.innerHTML = li.innerHTML + '<span>Contenu à venir...</span>';
        }
    });
    
    // Clean up malformed HTML
    const malformedElements = document.querySelectorAll('br + svg, svg + br + svg');
    malformedElements.forEach(function(element) {
        if (element.tagName === 'BR' && element.nextElementSibling && element.nextElementSibling.tagName === 'SVG') {
            element.style.display = 'none';
        }
    });
}

