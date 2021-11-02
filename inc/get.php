                <form id="subscribe-form" action="<?php htmlspecialchars_decode($_SERVER['PHP_SELF']) ?>" method="POST">
                    <div class="form-input">
                        <label for="name">Name:</label>
                        <input type="text" name="name" required="required" placeholder="Enter your name" />
                    </div>

                    <div class="form-input">
                        <label for="name">Email:</label>
                        <input type="email" name="email" required="required" placeholder="Enter your email" />
                    </div>
                    
                    <div class="form-input">
                        <button id="submit" type="submit">Subscribe</button>
                    </div>
                </form>