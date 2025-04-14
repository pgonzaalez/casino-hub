<x-layout>
    <x-navbar />
    
    <x-landing.hero />
    
    <main>
        <x-landing.games :games="$games" />
        
        <x-landing.promotions :promotions="$promotions" />
        
        <x-landing.testimonials :testimonials="$testimonials" />
        
        <x-landing.newsletter />
        
        <x-landing.payment-methods :paymentMethods="$paymentMethods" />
        
        <x-landing.contact :contactMethods="$contactMethods" />
    </main>
    
    <x-footer 
        :links="$footerLinks" 
        :legalLinks="$legalLinks" 
        :socialLinks="$socialLinks"
        :certifications="$certifications" 
    />
</x-layout>