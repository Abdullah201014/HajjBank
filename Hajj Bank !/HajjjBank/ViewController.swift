//
//  ViewController.swift
//  HajjjBank
//
//  Created by Sara Sluiman on 19/11/1439 AH.
//  Copyright © 1439 Sara Sluiman. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }
    
    @IBAction func backAction (_ sender: Any){
        self.dismiss(animated: true, completion: nil)
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

