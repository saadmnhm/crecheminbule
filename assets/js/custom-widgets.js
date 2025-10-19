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
            
            // Add visual focus indicator
            summary.addEventListener('focus', function() {
                this.style.outline = '2px solid #5750A0';
                this.style.outlineOffset = '2px';
            });
            
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
        // Fix spacing issues
        if (element.tagName === 'BR' && element.nextElementSibling && element.nextElementSibling.tagName === 'SVG') {
            element.style.display = 'none';
        }
    });
}

function enhanceWidgets() {
    // Enhance recent posts widget
    const recentPostsWidget = document.getElementById('recent-posts-1');
    if (recentPostsWidget) {
        recentPostsWidget.style.display = 'block';
        recentPostsWidget.style.visibility = 'visible';
        recentPostsWidget.style.opacity = '1';
        
        // Add enhanced interactions
        const links = recentPostsWidget.querySelectorAll('a');
        links.forEach(function(link) {
            // Add smooth hover effects
            link.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(8px)';
                this.style.transition = 'all 0.3s ease';
            });
            
            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
            
            // Add click tracking (optional)
            link.addEventListener('click', function(e) {
                console.log('Recent post clicked:', this.textContent.trim());
                
                // Add loading state
                this.style.opacity = '0.7';
                setTimeout(() => {
                    this.style.opacity = '1';
                }, 200);
            });
            
            // Enhance accessibility
            if (!link.getAttribute('aria-label')) {
                link.setAttribute('aria-label', 'Lire l\'article: ' + link.textContent.trim());
            }
        });
        
        // Add "Read More" functionality if there are many items
        addReadMoreFunctionality(recentPostsWidget);
    }
    
    // Enhance all sidebar widgets
    const sidebarWidgets = document.querySelectorAll('#secondary .widget');
    sidebarWidgets.forEach(function(widget, index) {
        // Add stagger animation delay
        widget.style.animationDelay = (index * 0.1) + 's';
        
        // Add hover effects
        widget.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
            this.style.boxShadow = '0 4px 15px rgba(87, 80, 160, 0.15)';
        });
        
        widget.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 2px 8px rgba(0, 0, 0, 0.1)';
        });
    });
}

function addReadMoreFunctionality(widget) {
    const list = widget.querySelector('ul');
    if (!list) return;
    
    const items = list.querySelectorAll('li');
    const maxVisibleItems = 5; // Show only 5 items initially
    
    if (items.length > maxVisibleItems) {
        // Hide extra items
        for (let i = maxVisibleItems; i < items.length; i++) {
            items[i].style.display = 'none';
            items[i].classList.add('hidden-item');
        }
        
        // Create show more button
        const showMoreBtn = document.createElement('button');
        showMoreBtn.textContent = 'Voir plus d\'articles (' + (items.length - maxVisibleItems) + ')';
        showMoreBtn.className = 'show-more-btn';
        showMoreBtn.setAttribute('aria-expanded', 'false');
        
        // Style the button
        Object.assign(showMoreBtn.style, {
            background: 'transparent',
            border: '1px solid #5750A0',
            color: '#5750A0',
            padding: '8px 16px',
            borderRadius: '4px',
            cursor: 'pointer',
            fontSize: '14px',
            marginTop: '15px',
            transition: 'all 0.3s ease',
            width: '100%'
        });
        
        // Add hover effects
        showMoreBtn.addEventListener('mouseenter', function() {
            this.style.background = '#5750A0';
            this.style.color = 'white';
        });
        
        showMoreBtn.addEventListener('mouseleave', function() {
            this.style.background = 'transparent';
            this.style.color = '#5750A0';
        });
        
        // Add click handler
        showMoreBtn.addEventListener('click', function() {
            const hiddenItems = list.querySelectorAll('.hidden-item');
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            hiddenItems.forEach(function(item, index) {
                if (isExpanded) {
                    // Hide items with stagger animation
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, index * 50);
                } else {
                    // Show items with stagger animation
                    setTimeout(() => {
                        item.style.display = 'block';
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(10px)';
                        
                        setTimeout(() => {
                            item.style.transition = 'all 0.3s ease';
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 10);
                    }, index * 50);
                }
            });
            
            // Update button text and aria-expanded
            if (isExpanded) {
                this.textContent = 'Voir plus d\'articles (' + (items.length - maxVisibleItems) + ')';
                this.setAttribute('aria-expanded', 'false');
            } else {
                this.textContent = 'Voir moins d\'articles';
                this.setAttribute('aria-expanded', 'true');
            }
        });
        
        widget.appendChild(showMoreBtn);
    }
}

function addScrollAnimations() {
    // Intersection Observer for scroll animations
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-in');
                
                // Add stagger animation for list items
                const listItems = entry.target.querySelectorAll('li');
                listItems.forEach(function(item, index) {
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, index * 100);
                });
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    // Observe elements for scroll animations
    const animatedElements = document.querySelectorAll('.widget, details, .entry-content > ul, .entry-content h2, .entry-content h3');
    animatedElements.forEach(function(element) {
        observer.observe(element);
        
        // Set initial state for animations
        element.style.opacity = '0.8';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'all 0.6s ease-out';
    });
}




function enhanceValuesSection() {
    // Find the "NOS VALEURS" section
    const valuesHeading = Array.from(document.querySelectorAll('h2')).find(h => 
        h.textContent.includes('NOS VALEURS')
    );
    
    if (!valuesHeading) return;
    
    // Mark the heading for CSS targeting
    valuesHeading.setAttribute('data-values', 'true');
    
    // Create values container
    const valuesContainer = document.createElement('div');
    valuesContainer.className = 'values-container';
    
    // Find all value items (h3 + p combinations after the NOS VALEURS heading)
    let currentElement = valuesHeading.nextElementSibling;
    const valueItems = [];
    let currentValueItem = null;
    
    while (currentElement && !currentElement.matches('h2')) {
        if (currentElement.tagName === 'P' && currentElement.querySelector('svg')) {
            // This is likely an icon paragraph - start a new value item
            if (currentValueItem) {
                valueItems.push(currentValueItem);
            }
            currentValueItem = {
                icon: currentElement,
                title: null,
                description: null
            };
        } else if (currentElement.tagName === 'H3' && currentValueItem) {
            currentValueItem.title = currentElement;
        } else if (currentElement.tagName === 'P' && currentValueItem && !currentElement.querySelector('svg') && !currentElement.querySelector('g') && !currentElement.querySelector('style')) {
            currentValueItem.description = currentElement;
        }
        
        currentElement = currentElement.nextElementSibling;
    }
    
    // Add the last item
    if (currentValueItem) {
        valueItems.push(currentValueItem);
    }
    
    // Create enhanced value items
    valueItems.forEach((item, index) => {
        if (!item.title || !item.description) return;
        
        const valueItem = document.createElement('div');
        valueItem.className = 'value-item';
        valueItem.setAttribute('data-aos', 'fade-up');
        valueItem.setAttribute('data-aos-delay', (index * 100).toString());
        
        // Create icon container
        const iconContainer = document.createElement('div');
        iconContainer.className = 'value-icon';
        
        // Extract and clean the SVG
        const svg = item.icon.querySelector('svg');
        if (svg) {
            const cleanSvg = svg.cloneNode(true);
            // Remove problematic attributes
            cleanSvg.removeAttribute('id');
            cleanSvg.removeAttribute('xmlns:xlink');
            // Set proper fill
            cleanSvg.style.fill = 'white';
            iconContainer.appendChild(cleanSvg);
        }
        
        // Create title
        const title = document.createElement('h3');
        title.textContent = item.title.textContent.trim();
        
        // Create description
        const description = document.createElement('p');
        description.textContent = item.description.textContent.trim();
        
        // Assemble the value item
        valueItem.appendChild(iconContainer);
        valueItem.appendChild(title);
        valueItem.appendChild(description);
        
        valuesContainer.appendChild(valueItem);
        
        // Hide original elements
        item.icon.style.display = 'none';
        item.title.style.display = 'none';
        item.description.style.display = 'none';
    });
    
    // Insert the container after the heading
    valuesHeading.parentNode.insertBefore(valuesContainer, valuesHeading.nextSibling);
    
    // Add intersection observer for animations
    if (typeof IntersectionObserver !== 'undefined') {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        valuesContainer.querySelectorAll('.value-item').forEach(item => {
            observer.observe(item);
        });
    }
    
    // Add hover sound effects (subtle)
    valuesContainer.addEventListener('mouseenter', function(e) {
        if (e.target.closest('.value-item')) {
            // Could add subtle sound effect here if desired
            e.target.closest('.value-item').style.setProperty('--hover-scale', '1.02');
        }
    }, true);
    
    console.log('Values section enhanced successfully');
}

// Initialize dynamic styles
addDynamicStyles();

// Image Slider Functionality
let currentSlideIndex = 0;
let slideInterval;

function initializeSlider() {
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const totalSlides = slides.length;
    
    if (totalSlides === 0) return; // No slides found
    
    // Set total slides counter
    const totalSlidesElement = document.getElementById('totalSlides');
    if (totalSlidesElement) {
        totalSlidesElement.textContent = totalSlides;
    }
    
    function showSlide(index) {
        // Hide all slides
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Show current slide and activate corresponding dot
        if (slides[index]) {
            slides[index].classList.add('active');
        }
        if (dots[index]) {
            dots[index].classList.add('active');
        }
        
        // Update counter
        const counterElement = document.getElementById('currentSlideNum');
        if (counterElement) {
            counterElement.textContent = index + 1;
        }
    }
    
    function changeSlide(direction) {
        currentSlideIndex += direction;
        
        if (currentSlideIndex >= totalSlides) {
            currentSlideIndex = 0;
        } else if (currentSlideIndex < 0) {
            currentSlideIndex = totalSlides - 1;
        }
        
        showSlide(currentSlideIndex);
        resetAutoSlide(); // Reset auto-slide timer when manually navigating
    }
    
    function currentSlide(index) {
        currentSlideIndex = index - 1;
        showSlide(currentSlideIndex);
        resetAutoSlide(); // Reset auto-slide timer when manually navigating
    }
    
    // Auto-slide functionality
    function startAutoSlide() {
        slideInterval = setInterval(() => {
            changeSlide(1);
        }, 5000); // Change slide every 5 seconds
    }
    
    function stopAutoSlide() {
        if (slideInterval) {
            clearInterval(slideInterval);
        }
    }
    
    function resetAutoSlide() {
        stopAutoSlide();
        startAutoSlide();
    }
    
    // Initialize slider
    showSlide(0);
    startAutoSlide();
    
    // Add keyboard navigation
    document.addEventListener('keydown', function(e) {
        const slider = document.querySelector('.image-slider');
        if (slider && isElementInViewport(slider)) {
            if (e.key === 'ArrowLeft') {
                e.preventDefault();
                changeSlide(-1);
            } else if (e.key === 'ArrowRight') {
                e.preventDefault();
                changeSlide(1);
            }
        }
    });
    
    // Add touch support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    const slider = document.querySelector('.image-slider');
    if (slider) {
        // Pause auto-slide when hovering
        slider.addEventListener('mouseenter', stopAutoSlide);
        slider.addEventListener('mouseleave', startAutoSlide);
        
        // Touch events
        slider.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
            stopAutoSlide(); // Stop auto-slide during touch interaction
        });
        
        slider.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            startAutoSlide(); // Resume auto-slide after touch interaction
        });
    }
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                changeSlide(1); // Swipe left - next slide
            } else {
                changeSlide(-1); // Swipe right - previous slide
            }
        }
    }
    
    // Make functions globally available
    window.changeSlide = changeSlide;
    window.currentSlide = currentSlide;
}

// Utility function to check if element is in viewport
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Initialize slider when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Add a small delay to ensure all elements are rendered
    setTimeout(initializeSlider, 100);
});

// Export functions for potential external use
window.CustomWidgets = {
    initializeAccordions: initializeAccordions,
    enhanceWidgets: enhanceWidgets,
    addScrollAnimations: addScrollAnimations,
    enhanceValuesSection: enhanceValuesSection,
    initializeSlider: initializeSlider
};