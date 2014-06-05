//
//  ViewController.h
//  TestLoginScreen1
//
//  Created by Alec Ray on 5/30/14.
//  Copyright (c) 2014 PW2014. All rights reserved.
//

#import <UIKit/UIKit.h>

@interface ViewController : UIViewController
@property (weak, nonatomic) IBOutlet UITextField *txtUsername;
@property (weak, nonatomic) IBOutlet UITextField *txtPassword;

- (IBAction)signinClicked:(id)sender;
- (IBAction)backgroundTap:(id)sender;

@end
