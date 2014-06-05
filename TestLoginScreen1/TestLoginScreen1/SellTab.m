//
//  SellTab.m
//  TestLoginScreen1
//
//  Created by Alec Ray on 6/4/14.
//  Copyright (c) 2014 PW2014. All rights reserved.
//

#import "SellTab.h"

@implementation SellTab

- (id)initWithFrame:(CGRect)frame
{
    self = [super initWithFrame:frame];
    if (self) {
        // Initialization code
    }
    return self;
}

/*
// Only override drawRect: if you perform custom drawing.
// An empty implementation adversely affects performance during animation.
- (void)drawRect:(CGRect)rect
{
    // Drawing code
}
*/

- (IBAction)backgroundTap:(id)sender {
    [self.self endEditing:YES];
}

-(BOOL) textFieldShouldReturn:(UITextField *)textField {
    [textField resignFirstResponder];
    return YES;
}
@end
