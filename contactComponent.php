<?php
    echo "<pre>";

        print_r($_POST);
    echo "</pre>";
?>


<div class="subSection mobile15">

    <div class="sectionTitle">Get in Touch<img src="../assets/goldLine.svg" class="bottomGoldLine"></div>
        <div class="contactContainer">
            <div class="contactFormContainer">
                <div class="contactTitle">Always ready to help you</div>
                <form action="mail.php" method="post" class="contactForm">
                    <input required type="text" class="formElement" id="name" placeholder="Enter Your Name" name="name" value=""/>
                    <input required type="number" class="formElement" id="number" placeholder="Enter Your Number" name="number" value=""/>
                    <input required type="text" class="formElement" id="email" placeholder="Enter Your Email" name="email" value=""/>
                    <textarea required type="text" class="formElement" id="message" placeholder="Enter Your Message" name="message" value=""></textarea>
                    <input type="submit" value="Send Message" class="sendMail">
                </form>
                <div class="contactDetailsContainer">
                    
                    <div class="contactDetailCard" onclick="tel()">
                        <img src="../assets/phone.png" class="contactIcons">
                        <div>+91-79-40053443</div>
                    </div>
                    
                    
                    <div class="contactDetailCard" onclick="mailto()">
                        <img src="../assets/mail.png" class="contactIcons">
                        <div>ilma@live.in</div>
                        
                    </div>
                </div>

            </div>
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.5366058608315!2d72.52521241550727!3d23.04078072142795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84b15aa50111%3A0x8f32fb2090bc3cd3!2sILMA%20-%20Indian%20Laminate%20Manufacturer&#39;s%20Association!5e0!3m2!1sen!2sin!4v1667284613123!5m2!1sen!2sin" class="mapsEmbed" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>
</div>

<style>

.contactFormContainer{
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 1vw;
    box-shadow: var(--shadowMild);
}
.contactForm{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.sendMail:hover,.subscribeButton:hover{
    background: var(--primarySolid);  
    cursor: pointer;
}

.formElement{
    border: 1px solid rgba(0, 0, 0, 0.1) !important;
}

.contactContainer{
    display: flex;
    flex-direction: row-reverse;
}
.mapsEmbed{
    height: auto;
    width: 40vw;
}
.contactDetailsContainer{
    display: flex;
    margin: 1vw 0vw;
    padding: 0.5vw;
    gap: 1vw;
    width: 100%;
}
.contactDetailCard{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1vw;
    cursor: pointer;
    font-size: 0.8vw;
    transition: 300ms ease-in;
    background: white;
    /* border: 1px solid rgba(0, 0, 0, 0.1) ; */
}
.contactDetailCard *{
    padding: 0.5vw;
}
.contactDetailCard:hover{
    background: #FFF4E2;
    border: none;
    box-shadow: var(--shadowMild);
}
.contactIcons{
    
    height: 2.5vw;
    width: 2.5vw;
}
.contactTitle{
    font-size: 1.5vw;
    padding: 2vw;
}
@media screen and (max-width: 550px) {
    .mapsEmbed{
    width: 85vw;
    height: 40vh;
    }
    .contactFormContainer{
        width: 85vw;
    }
    .contactContainer{
    flex-direction: column;
    }
    .contactTitle{
        font-size: 4vw;
    }
    .contactDetailCard{
        font-size: 4vw;
    }
    .contactIcons{   
        height: 8vw;
        width: 8vw;
    }

}
</style>